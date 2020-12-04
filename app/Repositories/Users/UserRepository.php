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
        $query = User::where('id', $id)
        ->first();

        if(!empty($query->phone_number)){

            $area_code = substr($query->phone_number, 0, 3);
            $phone_prefix = substr($query->phone_number, 3, 3);
            $phone_sufix = substr($query->phone_number, 6, 4);

            $query->masked_phone_number = '('.$area_code.') '.$phone_prefix.'-'.$phone_sufix;

        } else {
            $query->masked_phone_number = null;
        }

        return $query;
    }

    public function update($request, $id)
    {
        $password_array = (!empty($request->password))?['password' => Hash::make($request->password)]:[];

        $update_array = [
            'name' => $request->name,
            'phone_number' => $request->phone_number
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