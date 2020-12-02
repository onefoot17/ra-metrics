<?php

namespace App\Repositories\Users;

use App\Repositories\Users\Contracts\UserProfileRepositoryInterface;

use App\Models\User;

use Auth;
use Hash;

class UserProfileRepository implements UserProfileRepositoryInterface {

    public function store($request)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update($request, $id)
    {
        $update_array = [
            'name' => $request->name
        ];

        $password_array = (!empty($request->password))?['password' => Hash::make($request->password)]:[];

        $update_array = array_merge($update_array, $password_array);

        $update = User::where('id', Auth::User()->id)
        ->update($update_array);

        return $update;
    }

    public function destroy($id)
    {
        
    }

}