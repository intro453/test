<?php

namespace App\Http\Controllers\Tasks\Date1409;

use App\Http\Controllers\Controller;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Task14_1409_controller extends Controller
{
    public function index()
    {
        /*
            Петя засомневался в верности своей девушки.
        У Пети есть список ее телефонных разговоров за последний месяц в виде
        [['11.02.2024 12:33:40’, '11.02.2024 12:56:01’], ['12.02.2024 11:30:40’, '12.02.2024 11:34:20’], …].
        То есть массив из периодов с началом и окончанием каждого разговора. Такой же список есть про каждого из друзей девушки
        (друзья могут разговаривать не только с девушкой). Погрешность определения начала разговора и окончания разговора составляет 10 секунд.
         Выведите список друзей девушки,
        с которыми она могла разговаривать ночами с 01-00 до 3-00.
        Выведите топ 3 друга, с которыми она могла разговаривать дольше всего.
        */

        // список звонков девушки
        $girlCalls = [
            ['11.02.2024 12:33:40', '13.02.2024 12:56:01'],
            ['14.02.2024 11:30:40', '14.02.2024 11:34:20'],
            ['15.02.2024 01:20:00', '15.02.2024 01:50:10'], // ночной звонок
            ['11.02.2024 22:00:00', '11.02.2024 22:20:00'], // ночной звонок
        ];

        // список звонков друзей
        $friends = [
            'Максим' => [
                ['15.02.2024 01:20:00', '15.02.2024 01:50:05'],
                ['12.02.2024 12:00:00', '12.02.2024 12:10:00'],
            ],
            'Ирина' => [
                ['15.02.2024 02:30:00', '15.02.2024 02:50:00'],
            ],
            'Алексей' => [
                ['11.02.2024 22:00:00', '11.02.2024 22:20:00'],
                ['11.02.2024 22:00:00', '12.02.2024 03:20:00'],
            ],
        ];

        $suspicious = [];

        foreach ($friends as $friend => $friendCalls) {
            foreach ($friendCalls as [$fStart, $fEnd]) {
                $friendStart = Carbon::createFromFormat('d.m.Y H:i:s', $fStart);
                $friendEnd = Carbon::createFromFormat('d.m.Y H:i:s', $fEnd);

                foreach ($girlCalls as [$gStart, $gEnd]){
                    $girlStart = Carbon::createFromFormat('d.m.Y H:i:s', $gStart);
                    $girlEnd = Carbon::createFromFormat('d.m.Y H:i:s', $gEnd);
                    if ($friendStart->diffInSeconds($girlStart) <= 20 && $friendEnd->diffInSeconds($girlEnd) <= 20) {
                        //разговор совпал
                        $find[$friend]= $girlStart->diffInSeconds($girlEnd);

                        //ночь?
                        //touchesNight

                    }
                }
            }
        }




        arsort($find);
        $top3 = array_slice($find, 0, 3, true);
        dd($top3);
    }

    private function touchesNight(Carbon $dateStart, Carbon $dateEnd, int $nightStart = 1, int $nightEnd = 3): bool
    {
        if (!$dateStart->lt($dateEnd)) return false;


    }

}
