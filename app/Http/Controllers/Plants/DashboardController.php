<?php

namespace App\Http\Controllers\Plants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Plants\Contracts\PlantServiceInterface;

class DashboardController extends Controller
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
    public function indexParentSpecies(PlantServiceInterface $plantService)
    {
        $plantParentsSpecies = $plantService->getPlantParentsSpecies();
        $plantTypes = $plantService->getPlantTypes();
        $plants = $plantService->getPlants();

        return view('plants.dashboard.index', [
            'plantParentsSpecies' => $plantParentsSpecies,
            'plantTypes' => $plantTypes,
            'plants' => $plants
        ]);
    }
}
