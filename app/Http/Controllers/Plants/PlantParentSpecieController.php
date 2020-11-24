<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Plants\Contracts\PlantServiceInterface;

class PlantParentSpecieController extends Controller
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
        $plantParentsSpecies = $plantService->getPlantParentsSpecies();

        return view('plants.plants-parents-species.index', [
            'plantParentsSpecies' => $plantParentsSpecies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.plants-parents-species.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PlantServiceInterface $plantService)
    {
        $plantService->storePlantParentSpecie($request);

        return redirect()->route('plant_parents_species_index', [$request->Segment(1)])->with('message-success', 'Plant parent specie saved succefully!');
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
     * @param  string $lang
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id, PlantServiceInterface $plantService)
    {
        $plantParentSpecie = $plantService->getPlantParentSpecie($id);

        return view('plants.plants-parents-species.edit', [
            'plantParentSpecie' => $plantParentSpecie
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
        $plantService->updatePlantParentSpecie($request, $id);

        return back()->with('message-success', 'Plant parent specie updated succefully!');
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
        $plantService->destroyPlantParentSpecie($id);

        return back()->with('message-success', 'Plant parent specie deleted succefully!');
    }
}
