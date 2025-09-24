<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // а) все авто
        $cars = Car::all();

        // б) все авто, упорядоченные по цвету
        $cars = Car::orderBy('color', 'desc')->get(); //почему подчеркивает orderBy?

        // в) все авто, у которых год меньше 2000
        $cars = Car::where('year', '<', 2000)->get();

        // г) один авто, у которого id = 1
        $cars = Car::where('id',1)->get();

        // д) все авто красного цвета, год от 2000 до 2005 включительно, марка Audi
        $cars = Car::where('color', 'red')->whereBetween('year', [2000, 2005])->where('make', 'Audi')->get();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
