<?php

namespace App\Repositories\Plants;

use App\Repositories\Plants\Contracts\PlantChildRepositoryInterface;

use App\Models\Plants\PlantChild;

class PlantChildRepository implements PlantChildRepositoryInterface {

    public function show($id)
    {
        $show = PlantChild::where('id', $id)->first();

        return $show;
    }

    public function list()
    {
        $list = PlantChild::orderBy('id', 'desc')->get();

        return $list;
    }

    public function store($request)
    {
        $insert = new PlantChild();
        $insert->plant_parent_specieid = $request->plant_parent_specieid;
        $insert->plantid = $request->plantid;
        $insert->save();

        return $insert;
    }

    public function update($request, $id)
    {
        $update = PlantChild::where('id', $id)
        ->update([
            
        ]);

        return $update;
    }

    public function destroy($id)
    {
        $destroy = PlantChild::destroy($id);

        return $destroy;
    }

    public function deleteByPlantId($id)
    {
        $delete = PlantChild::where('plantid', $id)->delete();

        return $delete;
    }

}