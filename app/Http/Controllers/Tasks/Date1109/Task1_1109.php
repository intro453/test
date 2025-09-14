<?php

namespace App\Http\Controllers\Tasks\Date1109;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Task1_1109 extends Controller
{
    public function index(){
        /*
         * https://laravel.com/docs/10.x/helpers
         * Task1. Изучить хелперы для работы с массивом Arr: прочитать все (поверхностно),
         * поэкспериментировать с методами where, pluck, has, dot, join.
         * В результате в контроллере задаются начальные данные для этих функций
         * и вычисляются итоговые данные, а в blade показываются исходные данные,
         * название метода и результат.
         */

        //where
        //Метод Arr::where фильтрует массив, используя переданное замыкание
        $startArray = [100, 200, 300, 400, 500];
        $result = Arr::where($startArray, function (int $value, int $key) {
            return $value>300;
        });

        $data['where']['startArray']=$startArray;
        $data['where']['result']=$result;
        //where

        //pluck
        //Метод Arr::pluck извлекает все значения для указанного ключа из массива
        $startArray = [
            ['developer' => ['id' => 1, 'name' => 'Taylor']],
            ['developer' => ['id' => 2, 'name' => 'Abigail']],
        ];
        $result = Arr::pluck($startArray, 'developer.name');

        $data['pluck']['startArray']=$startArray;
        $data['pluck']['result']=$result;
        //pluck

        //has
        //Метод Arr::has проверяет, существует ли переданный элемент или элементы в массиве, используя «точечную нотацию»:
        $startArray = ['product' => ['name' => 'Desk', 'price' => 100, 'quantity' => 1]];
        $result = Arr::has($startArray, ['product.price', 'product.quantity']);

        $data['has']['startArray']=$startArray;
        $data['has']['result']=$result;
        //has

        //dot
        //Метод Arr::dot объединяет многомерный массив в одноуровневый, использующий «точечную нотацию» для обозначения глубины:
        $startArray = ['products' => ['desk' => ['price' => 100]]];
        $result = Arr::dot($startArray);

        $data['dot']['startArray']=$startArray;
        $data['dot']['result']=$result;
        //dot

        //join
        //Метод Arr::join объединяет элементы массива в строку. Используя второй аргумента этого метода вы также можете указать строку для соединения последнего элемента массива

        $startArray = ['Tailwind', 'Alpine', 'Laravel', 'Livewire'];
        $result = Arr::join($startArray, ', ', ' and ');

        $data['join']['startArray']=$startArray;
        $data['join']['result']=$result;
        //join

         return view('tasks.date1109.task1',['data' => $data]);

    }
}
