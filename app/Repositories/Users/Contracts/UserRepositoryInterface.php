<?php

namespace App\Repositories\Users\Contracts;

interface UserRepositoryInterface
{
    public function store($request);
    public function show($id);
    public function getAll();
    public function update($request, $id);
    public function destroy($id);
}