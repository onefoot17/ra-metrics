<?php

namespace App\Repositories\Plants;

use App\Repositories\Plants\Contracts\PlantTypeRepositoryInterface;

use App\Models\Plants\PlantType;

class PlantTypeRepository implements PlantTypeRepositoryInterface {

    public function show($id)
    {
        $show = PlantType::where('id', $id)->first();

        return $show;
    }

    public function list()
    {
        $list = PlantType::all();

        return $list;
    }

    public function store($request)
    {
        $comments = substr($request->comments, 0, 254);

        $insert = new PlantType();
        $insert->characteristic = $request->characteristic;
        $insert->comments = $comments;
        $insert->save();

        return $insert;
    }

    public function update($request, $id)
    {
        $comments = substr($request->comments, 0, 254);

        $update = PlantType::where('id', $id)
        ->update([
            'characteristic' => $request->characteristic,
            'comments' => $comments
        ]);

        return $update;
    }

    public function destroy($id)
    {
        $destroy = PlantType::destroy($id);

        return $destroy;
    }

}