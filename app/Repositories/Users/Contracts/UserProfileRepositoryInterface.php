<?php

namespace App\Repositories\Users\Contracts;

interface UserProfileRepositoryInterface
{
    public function store($request);
    public function edit($id);
    public function update($request, $id);
    public function destroy($id);
}