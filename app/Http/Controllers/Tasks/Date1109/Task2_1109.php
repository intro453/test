<?php

namespace App\Http\Controllers\Tasks\Date1109;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Task2_1109 extends Controller
{
    public function index(){
        /*
         * https://laravel.com/docs/10.x/strings
         * Task2. Изучить хелперы для работы со строками Str: прочитать все (поверхностно), поэкспериментировать с методами
         * limit, slug, finish, title, take, replace. В результате в контроллере задаются
         * начальные данные для этих функций и вычисляются итоговые данные,
         * а в blade показываются исходные данные, название метода и результат
         */


        //limit
        //Метод Str::limit усекает переданную строку до указанной длины:
        $start = 'The quick brown fox jumps over the lazy dog';
        $result = Str::limit($start, 20, '.');

        $data['limit']['start']=$start;
        $data['limit']['result']=$result;
        //limit

        //slug
        //Метод Str::slug создает «дружественный фрагмент» URL-адреса из переданной строки:
        $start = 'Laravel 10 Framework';
        $result = Str::slug($start, '-');;

        $data['slug']['start']=$start;
        $data['slug']['result']=$result;
        //slug

        //finish
        //Метод finish добавляет один экземпляр указанного значения в переданную строку, если она еще не заканчивается этим значением:
        $start = 'products/product123';
        $result = Str::of($start)->finish('/'); // of?????

        $data['finish']['start']=$start;
        $data['finish']['result']=$result;
        //finish


        //title
        //Метод finish добавляет один экземпляр указанного значения в переданную строку, если она еще не заканчивается этим значением:
        $start = 'a nice title uses the correct case';
        $result = Str::of($start)->title();

        $data['title']['start']=$start;
        $data['title']['result']=$result;
        //title

        //take
        //Метод Str::take возвращает указанное количество символов из начала строки:
        $start = 'a nice title uses the correct case';
        $result = Str::take($start,5);

        $data['take']['start']=$start;
        $data['take']['result']=$result;
        //take

        //replace
        //Метод Str::take возвращает указанное количество символов из начала строки:
        $start = 'Laravel 6.x';
        $result = Str::of($start)->replace('6.x', '7.x');

        $data['replace']['start']=$start;
        $data['replace']['result']=$result;
        //replace






        return view('tasks.date1109.task2',['data' => $data]);
    }
}
