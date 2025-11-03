<?php

namespace App\Http\Controllers\Tasks\Date0311;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Task1_0311_controller extends Controller
{
    public function index(Request $request)
    {

        if (!$request->session()->has('number')) {
            $request->session()->put('number', rand(1, 100));
            $request->session()->put('attempts', 10);
        }

        $attempts = $request->session()->get('attempts');
        $message = $request->session()->get('message');

        return view('tasks.date0311.task1', compact('attempts', 'message'));
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'guess' => 'required|integer|min:1|max:100'
        ]);

        $number = $request->session()->get('number');
        $attempts = $request->session()->get('attempts');

        $guess = $request->guess;

        // уменьшили попытки
        $attempts--;
        $request->session()->put('attempts', $attempts);

        if ($guess == $number) {
            $message = "Поздравляем! Вы угадали число.";
            session()->forget(['number', 'attempts']);
        } elseif ($attempts <= 0) {
            $message = "Попытки закончились. Число было: $number";
            session()->forget(['number', 'attempts']);
        } elseif ($guess > $number) {
            $message = "Меньше. Осталось попыток: $attempts";
        } else {
            $message = "Больше. Осталось попыток: $attempts";
        }

        return redirect()
            ->route('tasks.0311.task1')->with('message', $message);
    }
}
