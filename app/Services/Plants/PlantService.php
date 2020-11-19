<?php

namespace App\Services\Plants;

use App\Services\Plants\Contracts\PlantServiceInterface;

use App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface;
use App\Repositories\Plants\Contracts\PlantTypeRepositoryInterface;

class PlantService implements PlantServiceInterface
{
    // Plant Parents Species

    public function __construct(PlantParentSpecieRepositoryInterface $plantParentSpecieRepository, PlantTypeRepositoryInterface $plantTypeRepository)
    {
        $this->plantParentSpecieRepository = $plantParentSpecieRepository;
        $this->plantTypeRepository = $plantTypeRepository;
    }

    public function getPlantParentSpecie($id)
    {
        $plantParentSpecie = $this->plantParentSpecieRepository->show($id);

        return $plantParentSpecie;
    }

    public function getPlantParentsSpecies()
    {
        $plantParentsSpecies = $this->plantParentSpecieRepository->list();

        return $plantParentsSpecies;
    }

    public function updatePlantParentSpecie($request, $id)
    {
        $update = $this->plantParentSpecieRepository->update($request, $id);

        return $update;
    }

    public function storePlantParentSpecie($request)
    {
        $insert = $this->plantParentSpecieRepository->store($request);

        return $insert;
    }

    public function destroyPlantParentSpecie($id)
    {
        $destroy = $this->plantParentSpecieRepository->destroy($id);

        return $destroy;
    }


    // Plant Types

    public function getPlantType($id)
    {
        $plantType = $this->plantTypeRepository->show($id);

        return $plantType;
    }

    public function getPlantTypes()
    {
        $plantType = $this->plantTypeRepository->list();

        return $plantType;
    }

    public function updatePlantType($request, $id)
    {
        $update = $this->plantTypeRepository->update($request, $id);

        return $update;
    }

    public function storePlantType($request)
    {
        $insert = $this->plantTypeRepository->store($request);

        return $insert;
    }

    public function destroyPlantType($id)
    {
        $destroy = $this->plantTypeRepository->destroy($id);

        return $destroy;
    }
}