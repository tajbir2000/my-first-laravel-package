<?php


namespace Tajbir2000\MyFirstLaravelPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'my_model_table';

    public function getCapseName():string
    {
        return strtoupper($this->name);
    }
}
