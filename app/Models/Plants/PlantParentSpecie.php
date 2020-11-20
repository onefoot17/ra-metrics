<?php

namespace App\Models\Plants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantParentSpecie extends Model
{
    protected $table = 'plants.plant_parents_species';

    use HasFactory;

    public function plantTypes()
    {
        return $this->belongsToMany('App\Models\PLants\PlantType', 'plants.plants', 'plant_parent_specieid', 'plant_typeid')
                    ->withPivot(['comments'])
                    //->as('plants')
                    ->withTimestamps();
    }

    public function plants()
    {
        return $this->hasMany('App\Models\Plants\Plant', 'plant_parent_specieid');
    }
}
