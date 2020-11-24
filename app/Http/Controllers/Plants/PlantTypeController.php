<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Plants\Contracts\PlantServiceInterface;

class PlantTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlantServiceInterface $plantService)
    {
        $plantTypes = $plantService->getPlantTypes();

        return view('plants.plants-types.index', [
            'plantTypes' => $plantTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.plants-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PlantServiceInterface $plantService)
    {
        $plantService->storePlantType($request);

        return redirect()->route('plant_types_index', [$request->segment(1)])->with('message-success', 'Plant type saved succefully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $lang
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $lang
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id, PlantServiceInterface $plantService)
    {
        $plantType = $plantService->getPlantType($id);

        return view('plants.plants-types.edit', [
            'plantType' => $plantType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $lang
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id, PlantServiceInterface $plantService)
    {
        $plantService->updatePlantType($request, $id);

        return back()->with('message-success', 'Plant type updated succefully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $lang
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id, PlantServiceInterface $plantService)
    {
        $plantService->destroyPlantType($id);

        return back()->with('message-success', 'Plant type deleted succefully!');
    }
}
