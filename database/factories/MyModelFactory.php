<?php

namespace Tajbir2000\MyFirstLaravelPackage\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tajbir2000\MyFirstLaravelPackage\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
        ];
    }
}
