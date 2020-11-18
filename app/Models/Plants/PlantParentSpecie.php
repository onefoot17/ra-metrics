<?php

namespace App\Models\Plants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantParentSpecie extends Model
{
    protected $table = 'plants.plant_parents_species';

    use HasFactory;
}
