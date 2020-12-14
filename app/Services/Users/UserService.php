<?php

namespace App\Services\Users;

use Illuminate\Support\Facades\Validator;

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
        $query = $this->UserRepositoryInterface->show($id);

        return $query;
    }

    public function updateUserProfile($request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'email:rfc,dns',
            'phone_number' => 'min:10'
        ]);

        if(!is_null($request->password)){
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'email' => 'email:rfc,dns',
                'password' => 'required|string|min:8|confirmed',
                'phone_number' => 'min:10'
            ]);
        }

        if($validator->fails()){
            $update = $validator->errors();
        } else {
            $update = $this->UserRepositoryInterface->update($request, $id);
        }

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

    // Users Screen

    public function getAllUsers()
    {
        $query = $this->UserRepositoryInterface->getAll();

        return $query;
    }

    public function storeUser($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'email:rfc,dns||unique:App\Models\User',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'min:10'
        ]);

        if($validator->fails()){
            $insert = $validator->errors();
        } else {
            $insert = $this->UserRepositoryInterface->store($request);
        }

        return $insert;
    }

    public function destroyUser($id)
    {
        $this->UserRepositoryInterface->destroy($id);
    }
}