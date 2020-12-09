<?php

namespace App\Http\Controllers\Admin\Users;

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
        $user = $userService->getUserProfile(Auth::User()->id);
        $settings = $userService->getSettings(Auth::User()->settings->id);

        return view('admin.users.settings', [
            'settings' => $settings,
            'user' => $user
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
