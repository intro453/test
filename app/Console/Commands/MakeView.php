<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    protected $signature = 'make:view {name : view в dot- или slash-формате, напр. tasks.index или tasks/tasks}';
    protected $description = 'Создать Blade view с нужными папками';

    public function handle()
    {
        // поддержка и dot- и slash-форматов
        $name = str_replace('.', '/', $this->argument('name'));

        $path = resource_path("views/{$name}.blade.php");
        $dir  = dirname($path);

        // создаём директории, если их нет
        File::ensureDirectoryExists($dir);

        if (File::exists($path)) {
            $this->warn("View уже существует: resources/views/{$name}.blade.php");
            return Command::SUCCESS;
        }

        File::put($path, "<h1>Hello from {$name}.blade.php</h1>\n");
        $this->info("Создано: resources/views/{$name}.blade.php");

        return Command::SUCCESS;
    }
}
