<?php

namespace App\Models\Plants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    protected $table = 'plants.plant_types';
    
    use HasFactory;
}
