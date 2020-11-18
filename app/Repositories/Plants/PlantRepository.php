<?php

namespace App\Repositories\Plants;

use App\Repositories\Plants\Contracts\PlantRepositoryInterface;

use App\Models\Plants\PlantParentSpecie;

class PlantRepository implements PlantRepositoryInterface
{
    public function store($request)
    {

        $comments = substr($request->comments, 0, 254);

        $plant_parent_specie = new PlantParentSpecie();
        $plant_parent_specie->plant_specie_name = $request->plant_specie_name;
        $plant_parent_specie->comments = $comments;
        $plant_parent_specie->save();

        return $plant_parent_specie;
    }
}