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
        $user_info = $userService->getSettings(Auth::User()->id);
        return view('users.settings');
    }

    public function update($language, $id, Request $request)
    {

    }

    public function destroy()
    {

    }
}
