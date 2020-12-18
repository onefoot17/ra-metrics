<?php

namespace App\Repositories\Plants;

use App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface;

use App\Models\Plants\PlantParentSpecie;

class PlantParentSpecieRepository implements PlantParentSpecieRepositoryInterface {

    public function show($id)
    {
        $show = PlantParentSpecie::where('id', $id)->first();

        return $show;
    }

    public function list()
    {
        $list = PlantParentSpecie::orderBy('id', 'desc')->get();

        return $list;
    }

    public function store($request)
    {
        $comments = substr($request->comments, 0, 254);

        $insert = new PlantParentSpecie();
        $insert->plant_parent_name = $request->plant_parent_name;
        $insert->comments = $comments;
        $insert->image_path = $request->image_path;
        $insert->save();

        return $insert;
    }

    public function update($request, $id)
    {
        $comments = substr($request->comments, 0, 254);
        
        $update = PlantParentSpecie::where('id', $id)
        ->update([
            'plant_parent_name' => $request->plant_parent_name,
            'comments' => $comments
        ]);

        return $update;
    }

    public function destroy($id)
    {
        // $destroy = PlantParentSpecie::where('id', $id)
        // ->delete();

        //Same thing but save time for being simplier to type
        $destroy = PlantParentSpecie::destroy($id);

        return $destroy;
    }

}