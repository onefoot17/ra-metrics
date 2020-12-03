<?php

namespace App\Services\Users;

use App\Services\Users\Contracts\UserServiceInterface;

use App\Repositories\Users\Contracts\UserRepositoryInterface;


class UserService implements UserServiceInterface
{
    public function __construct(
        UserRepositoryInterface $UserRepositoryInterface
    )
    {
        $this->UserRepositoryInterface = $UserRepositoryInterface;
    }

    // My Profile

    public function getUserProfile($id)
    {
        $query = $this->UserRepositoryInterface->show();

        return $query;
    }

    public function updateUserProfile($request, $id)
    {
        $update = $this->UserRepositoryInterface->update($request, $id);

        return $update;
    }

    public function destroyUserProfile($id)
    {
        
    }

    // Settings

    public function getSettings($id)
    {

    }
}