<?php

namespace App\Services\Users;

use App\Services\Users\Contracts\UserProfileServiceInterface;

use App\Repositories\Users\Contracts\UserProfileRepositoryInterface;

class UserProfileService implements UserProfileServiceInterface
{
    public function __construct(
        UserProfileRepositoryInterface $UserProfileRepositoryInterface
    )
    {
        $this->UserProfileRepositoryInterface = $UserProfileRepositoryInterface;
    }

    public function getUserProfile($id)
    {
        
    }

    public function updateUserProfile($request, $id)
    {
        $update = $this->UserProfileRepositoryInterface->update($request, $id);

        return $update;
    }

    public function destroyUserProfile($id)
    {
        
    }
}