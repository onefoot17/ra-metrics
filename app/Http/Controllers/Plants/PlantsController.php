<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Plants\Contracts\PlantServiceInterface;

class PlantsController extends Controller
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
        $plants = $plantService->getPlants();

        return view('plants.plants.index', [
            'plants' => $plants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PlantServiceInterface $plantService)
    {
        $plantParentsSpecies = $plantService->getPlantParentsSpecies();
        $plantTypes = $plantService->getPlantTypes();

        return view('plants.plants.create', [
            'plantParentsSpecies' => $plantParentsSpecies,
            'plantTypes' => $plantTypes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PlantServiceInterface $plantService)
    {
        $validateData = $request->validate([
            'plant_parent_specieid' => [
                'required'
            ],
            'plant_typeid' => [
                'required'
            ],
            'comments' => [
                'max:255'
            ]
        ]);
        $plantService->storePlant($request);

        return redirect()->route('plant_index')->with('message-success', 'Plant saved succefully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PlantServiceInterface $plantService)
    {
        $plant = $plantService->getPlant($id);
        $plantParentsSpecies = $plantService->getPlantParentsSpecies();
        $plantTypes = $plantService->getPlantTypes();

        return view('plants.plants.edit', [
            'plant' => $plant,
            'plantParentsSpecies' => $plantParentsSpecies,
            'plantTypes' => $plantTypes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, PlantServiceInterface $plantService)
    {
        $validateData = $request->validate([
            'plant_parent_specieid' => [
                'required'
            ],
            'plant_typeid' => [
                'required'
            ],
            'comments' => [
                'max:255'
            ]
        ]);

        $plantService->updatePlant($request, $id);

        return back()->with('message-success', 'Plant updated succefully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PlantServiceInterface $plantService)
    {
        $plantService->destroyPlant($id);

        return back()->with('message-success', 'Plant deleted succefully!');
    }
}
