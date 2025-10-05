<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class NowDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:now-date';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Показывает текущую дату (будни зелёным, выходные красным)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $date = Carbon::now();
        $dayOfWeek = $date->dayOfWeek;

        $formatted = $date->format('d.m.Y');
        if ($dayOfWeek === 0 || $dayOfWeek === 6) {
            $this->error($formatted);
        } else {
            $this->info($formatted);
        }
    }
}
