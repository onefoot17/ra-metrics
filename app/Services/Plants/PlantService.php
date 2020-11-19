<?php

namespace App\Services\Plants;

use App\Services\Plants\Contracts\PlantServiceInterface;

use App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface;

class PlantService implements PlantServiceInterface
{
    public function __construct(PlantParentSpecieRepositoryInterface $plantParentSpecieRepository)
    {
        $this->plantParentSpecieRepository = $plantParentSpecieRepository;
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
}