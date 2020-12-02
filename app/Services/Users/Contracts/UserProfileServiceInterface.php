<?php

namespace App\Services\Users\Contracts;

interface UserProfileServiceInterface 
{
    // Plant Parents Species
    public function getUserProfile($id);
    public function updateUserProfile($request, $id);
    public function destroyUserProfile($id);
}