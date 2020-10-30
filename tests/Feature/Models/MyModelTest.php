<?php


namespace Tajbir2000\MyFirstLaravelPackage\Tests\Feature\Models;

use Tajbir2000\MyFirstLaravelPackage\Models\MyModel;
use Tajbir2000\MyFirstLaravelPackage\Tests\TestCase;

class MyModelTest extends TestCase
{
    public function test_it_can_create_my_model_object()
    {
        $this->assertDatabaseCount('my_model_table', 0);

        MyModel::factory()->create(['name' => 'Imdad']);

        $this->assertDatabaseHas('my_model_table', ['name' => 'Imdad']);
    }

    public function test_it_can_return_name_in_all_capse()
    {
        /** @var MyModel $mymodel */
        $mymodel = MyModel::factory()->create(['name' => 'Imdad']);

        $this->assertEquals('IMDAD', $mymodel->getCapseName());
    }
}
