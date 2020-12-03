<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Users\UserService;

use Auth;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($language)
    {
        
    }

    public function edit($language, UserService $userService)
    {
        $settings = $userService->getSettings(Auth::User()->settings->id);

        return view('users.settings', [
            'settings' => $settings
        ]);
    }

    public function update($language, $id, Request $request, UserService $userService)
    {
        $userService->updateSetting($request, $id);

        return redirect()->route('settings_edit', ['language' => Auth::User()->settings->language])->with('message-success', __('Setting edited succefully!'));
    }

    public function destroy()
    {

    }
}
