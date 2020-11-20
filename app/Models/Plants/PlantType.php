<?php

namespace App\Models\Plants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    protected $table = 'plants.plant_types';
    
    use HasFactory;

    public function PlantParentsSpecies()
    {
        return $this->belongsToMany('App\Models\Plants\PlantParentSpecie', 'plants.plants', 'plant_typeid', 'plant_parent_specieid')
                    ->withPivot(['comments'])
                    //->as('plants')
                    ->withTimestamps()
                    ;
    }

    public function plants()
    {
        return $this->hasMany('App\Models\Plants\PLant', 'plant_typeid');
    }
}
