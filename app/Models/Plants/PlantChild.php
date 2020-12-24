<?php

namespace App\Models\Plants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantChild extends Model
{
    use HasFactory;

    protected $table = 'plants.plant_children';
}
