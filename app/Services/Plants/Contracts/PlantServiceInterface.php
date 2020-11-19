<?php

namespace App\Services\Plants\Contracts;

interface PlantServiceInterface 
{
    // Plant Parents Species
    public function getPlantParentSpecie($id);
    public function getPlantParentsSpecies();
    public function storePlantParentSpecie($request);
    public function updatePlantParentSpecie($request, $id);
    public function destroyPlantParentSpecie($id);

    // Plant Types
    public function getPlantType($id);
    public function getPlantTypes();
    public function storePlantType($request);
    public function updatePlantType($request, $id);
    public function destroyPlantType($id);

    // Plants
    public function getPlant($id);
    public function getPlants();
    public function storePlant($request);
    public function updatePlant($request, $id);
    public function destroyPlant($id);
}