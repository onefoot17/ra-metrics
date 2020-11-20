<?php

namespace App\Models\Plants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Plant extends Model
{
    protected $table = 'plants.plants';

    use HasFactory;

    public function plantParentSpecie()
    {
        return $this->belongsTo('App\Models\Plants\PlantParentSpecie', 'plant_parent_specieid');
    }

    public function plantType()
    {
        return $this->belongsTo('App\Models\Plants\PlantType', 'plant_typeid');
    }
}
