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

    public function storePlantParentSpecie($request)
    {
        $insert = $this->plantParentSpecieRepository->store($request);

        return $insert;
    }
}