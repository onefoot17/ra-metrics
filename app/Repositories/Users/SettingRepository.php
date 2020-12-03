<?php

namespace App\Repositories\Users;

use App\Repositories\Users\Contracts\SettingRepositoryInterface;

use App\Models\Setting;

use Auth;
use Hash;

class SettingRepository implements SettingRepositoryInterface {

    public function store($request)
    {
        
    }

    public function show($id)
    {
        $query = Setting::where('id', $id)
        ->first();

        return $query;
    }

    public function update($request, $id)
    {
        switch($request->theme_color){
            case true:
                $theme_color = 'dark';
                break;
            case false:
                $theme_color = 'light';
                break;
            default:
                $theme_color = 'dark';
                break;
        }

        $update = Setting::where('id', $id)
        ->update([
            'language' => $request->language,
            'theme_color' => $theme_color
        ]);

        return $update;
    }

    public function destroy($id)
    {
        
    }

}