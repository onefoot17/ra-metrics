<?php

namespace App\Repositories\Plants;

use App\Repositories\Plants\Contracts\PlantRepositoryInterface;

use App\Models\Plants\Plant;

class PlantRepository implements PlantRepositoryInterface {

    public function show($id)
    {
        $show = Plant::where('id', $id)->first();

        return $show;
    }

    public function list()
    {
        $list = Plant::all();

        return $list;
    }

    public function store($request)
    {
        $comments = substr($request->comments, 0, 254);

        $insert = new Plant();
        $insert->plant_parent_specieid = $request->plant_parent_specieid;
        $insert->plant_typeid = $request->plant_typeid;
        $insert->comments = $comments;
        $insert->save();

        return $insert;
    }

    public function update($request, $id)
    {
        $comments = substr($request->comments, 0, 254);

        $update = Plant::where('id', $id)
        ->update([
            'comments' => $comments
        ]);

        return $update;
    }

    public function destroy($id)
    {
        $destroy = Plant::destroy($id);

        return $destroy;
    }

}