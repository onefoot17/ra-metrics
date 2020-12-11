<?php

namespace App\Repositories\Users;

use App\Repositories\Users\Contracts\UserRepositoryInterface;

use App\Models\User;

use Auth;
use Hash;

class UserRepository implements UserRepositoryInterface {

    public function store($request)
    {
        $store = new User();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->phone_number = $request->phone_number;
        $store->save();

        return $store;
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
        if(!empty($request->password)){
            if($request->password === $request->password_confirmation){
                $password_array = ['password' => Hash::make($request->password)];
            } else {
                $password_array = [];
                $error = ['error' => __('validation.confirmed', ['attribute' => 'Password'])];
            }
        } else {
            $password_array = [];
        }

        $update_array = [
            'name' => $request->name,
            'phone_number' => $request->phone_number
        ];

        $update_array = array_merge($update_array, $password_array);

        $update = User::where('id', $id)
        ->update($update_array);

        if(isset($error)){
            return $error;
        }

        return $update;
    }

    public function destroy($id)
    {
        $delete = User::where('id', $id)
        ->delete();

        return $delete;
    }

    public function getAll()
    {
        $query = User::orderBy('id')->get();

        return $query;
    }

    public function checkUserByEmail($email)
    {
        $user = User::where('email', $email)->first();

        return $user;
    }
}