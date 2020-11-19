<?php

namespace App\Repositories\Plants\Contracts;

interface PlantRepositoryInterface
{
    public function show($id);
    public function list();
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}