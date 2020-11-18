<?php

namespace App\Repositories\Plants\Contracts;

interface PlantParentSpecieRepositoryInterface
{
    public function list();
    public function store($request);
    public function update($request, $id);
}