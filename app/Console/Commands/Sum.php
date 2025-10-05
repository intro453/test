<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Sum extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sum {k}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $k = $this->argument('k');

        // Проверяем, что k натуральное
        if ($k < 1 || !ctype_digit($k)) {
            $this->error('k должно быть натуральным числом (1, 2, 3...)');
            return;
        }

        $sum = 0;
        $bar = $this->output->createProgressBar($k);
        $bar->start();

        for ($i = 1; $i <= $k; $i++) {
            $num = $this->ask("Введите число #{$i}");
            $sum += (float)$num;
            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info("Сумма: {$sum}");


    }
}
