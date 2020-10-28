<?php


namespace Tajbir2000\MyFirstLaravelPackage\Tests\Feature\Commands;


use Tajbir2000\MyFirstLaravelPackage\Tests\TestCase;

class MyFirstLaravelPackageCommandTest extends TestCase
{
    /** @test */
    public function it_can_run_my_first_package_command()
    {
        $this->artisan('my-first-laravel-package')->assertExitCode(0);
    }

    /** @test */
    public function it_read_config_file_to_generate_my_first_command_output()
    {
        $this->artisan('my-first-laravel-package')
            ->expectsOutput('Hi, this is a simple text')
            ->assertExitCode(0);

        $text = 'Customized text';
        config()->set('my-first-laravel-package.command_output_text', $text);

        $this->artisan('my-first-laravel-package')
            ->expectsOutput($text)
            ->assertExitCode(0);
    }
}
