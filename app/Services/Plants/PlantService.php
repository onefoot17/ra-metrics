<?php

namespace App\Services\Plants;

use App\Services\Plants\Contracts\PlantServiceInterface;

use App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface;
use App\Repositories\Plants\Contracts\PlantTypeRepositoryInterface;
use App\Repositories\Plants\Contracts\PlantRepositoryInterface;

class PlantService implements PlantServiceInterface
{
    // Plant Parents Species

    public function __construct(
        PlantParentSpecieRepositoryInterface $plantParentSpecieRepository, 
        PlantTypeRepositoryInterface $plantTypeRepository,
        PlantRepositoryInterface $plantRepository
    )
    {
        $this->plantParentSpecieRepository = $plantParentSpecieRepository;
        $this->plantTypeRepository = $plantTypeRepository;
        $this->plantRepository = $plantRepository;
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

    // Plants

    public function getPlant($id)
    {
        $plant = $this->plantRepository->show($id);

        return $plant;
    }

    public function getPlants()
    {
        $plant = $this->plantRepository->list();

        return $plant;
    }

    public function updatePlant($request, $id)
    {
        $update = $this->plantRepository->update($request, $id);

        return $update;
    }

    public function storePlant($request)
    {
        $insert = $this->plantRepository->store($request);

        return $insert;
    }

    public function destroyPlant($id)
    {
        $destroy = $this->plantRepository->destroy($id);

        return $destroy;
    }
}