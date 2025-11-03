<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cars\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /*
         * $questions = Question::all();
        $questions = Question::get();
        $questions = Question::withTrashed()->get();
        $questions = Question::onlyTrashed()->get();
        //Question::onlyTrashed()->restore();
        //Question::where('id', 1)->forceDelete();
        //Question::create([]);
        //Question::forceCreate([]); // без fillable

        // б) все авто, упорядоченные по цвету
        $cars = Car::orderBy('color', 'desc')->get(); //почему подчеркивает orderBy? php artisan ide-helper:models

        //php artisan list
        //php artisan vendor:publish

        // в) все авто, у которых год меньше 2000
        $cars = Car::where('year', '<', 2000)->get();

        // г) один авто, у которого id = 1
        $car = Car::where('id',1)->get(); //first - обьект/null
        $car = Car::find(1)->get();
        $car = Car::findorfail(1)->get();

        // д) все авто красного цвета, год от 2000 до 2005 включительно, марка Audi
        $cars = Car::where('color', 'red')->whereBetween('year', [2000, 2005])->where('make', 'Audi')->get();
        //abort(404);
         */
        //$cars = Car::all();

        $cars = Car::withTrashed()->get();



        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws ValidationException
     */
    public function store(StoreRequest $request)
    {



        /*
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:40',
            'description' => ['required', 'min:5'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('questions.create')
                ->withErrors($validator)
                ->withInput();
        }

        //dd($request->all());

        // 1 способ
//        $question = new Question();
//
//        // нет $question->id
//
//        $question->name = $request->name;
//        $question->description = $request->description;
//        $question->is_quick = 1;
//
//        $question->save();
//
//        // уже есть $question->id

        // 2 способ

//        $question = Question::create([
//            'name' => $request->name,
//            'description' => $request->description,
//        ]);

        // или

        // $question = Question::create($request->all());

        // $question = Question::create($request->except('_token'));
        */


        //есть аналог попроще //$request->validate() сам возвращает ошибки и значения
        /*$validator = Validator::make($request->all(), [
            'make' => 'required|string|min:2|max:40',
            'model' => 'required|string|min:2|max:40',
            'year' => 'required|integer|min:1990',
        ]);

        if ($validator->fails()) {
            return redirect()->route('cars.create')
                ->withErrors($validator)
                ->withInput();
        }

        $car = Car::create($validator->validated());
        */

        $car = Car::create($request->validated());
        return redirect()->route('cars.show', [$car->id])
            ->with('message', 'Данные сохранены');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //        $question = Question::where('id', $id)->first();
//
//        if ($question) {
//            return view('questions.show', compact('question'));
//        }
//
//        abort(404);

        //$question = Question::find($id);


        $car = Car::findorfail($id);
        return view('cars.show', compact( 'car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findorfail($id);
        return view('cars.edit', compact( 'car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'make' => 'string|min:2|max:40',
            'model' => 'string|min:2|max:40',
            'year' => 'string',
            'color' => 'string',
            'is_sold' => 'integer',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('cars.edit', [$car->id])
                ->withErrors($validator)
                ->withInput();
        }

        //dd($request->all());

//        $question->update([
//            'name' => $request->name,
//            //...
//        ]);

        $data = $validator->validated();

        $car->update($data);

        // Question::where('id', $id)->update($request->validated());

        return redirect()->route('cars.edit', [$car->id])
            ->with('message', 'Данные сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, $action = 'soft_delete')
    {
        $car = Car::withTrashed()->findOrFail($id);

        switch ($action) {
            case 'repair':
                $car->restore();
                $msg = 'Автомобиль восстановлен';
                break;

            case 'hard_delete':
                $car->forceDelete();
                $msg = 'Автомобиль удалён полностью';
                break;

            default:
                $car->delete();
                $msg = 'Автомобиль перемещён в корзину';
                break;
        }

        return redirect()->route('cars.index')->with('message', $msg);
    }
}
