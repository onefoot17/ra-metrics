<?php

namespace App\Services\Users;

use App\Services\Users\Contracts\UserServiceInterface;

use App\Repositories\Users\Contracts\UserRepositoryInterface;
use App\Repositories\Users\Contracts\SettingRepositoryInterface;

class UserService implements UserServiceInterface
{
    public function __construct(
        UserRepositoryInterface $UserRepositoryInterface,
        SettingRepositoryInterface $SettingRepositoryInterface
    )
    {
        $this->UserRepositoryInterface = $UserRepositoryInterface;
        $this->SettingRepositoryInterface = $SettingRepositoryInterface;
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
        $query = $this->SettingRepositoryInterface->show($id);

        return $query;
    }

    public function updateSetting($request, $id)
    {
        $update = $this->SettingRepositoryInterface->update($request, $id);

        return $update;
    }
}