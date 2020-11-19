<?php

namespace App\Services\Plants\Contracts;

interface PlantServiceInterface 
{
    public function getPlantParentSpecie($id);
    public function getPlantParentsSpecies();
    public function storePlantParentSpecie($request);
    public function updatePlantParentSpecie($request, $id);
    public function destroyPlantParentSpecie($id);
}