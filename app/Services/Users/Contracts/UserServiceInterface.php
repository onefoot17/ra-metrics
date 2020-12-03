<?php

namespace App\Services\Users\Contracts;

interface UserServiceInterface 
{
    // My Profile
    public function getUserProfile($id);
    public function updateUserProfile($request, $id);
    public function destroyUserProfile($id);
}