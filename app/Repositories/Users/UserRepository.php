<?php

namespace App\Repositories\Users;

use App\Repositories\Users\Contracts\UserRepositoryInterface;

use App\Models\User;

use Auth;
use Hash;

class UserRepository implements UserRepositoryInterface {

    public function store($request)
    {
        
    }

    public function show($id)
    {
        $query = UserProfileRepositoryInterface::where('id', $id)
        ->first();

        return $query;
    }

    public function update($request, $id)
    {
        $password_array = (!empty($request->password))?['password' => Hash::make($request->password)]:[];

        $update_array = [
            'name' => $request->name
        ];

        $update_array = array_merge($update_array, $password_array);

        $update = User::where('id', Auth::User()->id)
        ->update($update_array);

        return $update;
    }

    public function destroy($id)
    {
        
    }

}