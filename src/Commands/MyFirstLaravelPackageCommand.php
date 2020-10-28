<?php

namespace Tajbir2000\MyFirstLaravelPackage\Commands;

use Illuminate\Console\Command;

class MyFirstLaravelPackageCommand extends Command
{
    public $signature = 'my-first-laravel-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment(config('my-first-laravel-package.command_output_text'));
    }
}
