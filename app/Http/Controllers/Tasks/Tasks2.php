<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class Tasks2 extends Controller
{ //chatgpt
    public function index()
    {
        // Собираем все именованные роуты tasks.{date}.task{num}
        $groups = collect(Route::getRoutes())
            ->map(function ($r) {
                $name = $r->getName();
                if (!$name) return null;

                // tasks.1109.task3 -> date=1109, num=3
                if (preg_match('/^tasks\.(\d{4})\.task(\d+)$/', $name, $m)) {
                    return [
                        'date' => $m[1],
                        'num' => (int)$m[2],
                        'url' => route($name),
                    ];
                }
                return null;
            })
            ->filter()
            ->groupBy('date')
            ->map(fn($items) => $items->sortBy('num')->values());

        return view('tasks.tasks2', ['groups' => $groups]);
    }
}
