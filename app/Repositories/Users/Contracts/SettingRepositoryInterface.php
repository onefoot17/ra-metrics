<?php

namespace App\Repositories\Users\Contracts;

interface SettingRepositoryInterface
{
    public function store($request);
    public function show($id);
    public function update($request, $id);
    public function destroy($id);
}