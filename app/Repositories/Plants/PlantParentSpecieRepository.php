<?php

namespace App\Repositories\Plants;

use App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface;

use App\Models\Plants\PlantParentSpecie;

class PlantParentSpecieRepository implements PlantParentSpecieRepositoryInterface {

    public function list()
    {
        
    }

    public function store($request)
    {
        $comments = substr($request->comments, 0, 254);

        $insert = new PlantParentSpecie();
        $insert->plant_specie_name = $request->plant_specie_name;
        $insert->comments = $comments;
        $insert->save();

        return $insert;
    }

    public function update($request, $id)
    {
        $update = PlantParentSpecie::where('id', $id)
        ->update([
            'plant_specie_name' => $request->plant_specie_name,
            'comments' => $request->comments
        ]);

        return $update;
    }

}