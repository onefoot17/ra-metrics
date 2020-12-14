<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Users\Contracts\UserServiceInterface;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(UserServiceInterface $userService)
    {
        $users = $userService->getAllUsers();

        return view('admin.users.index', compact('users'));
    }

    public function store(Request $request, UserServiceInterface $userService)
    {
        $result = $userService->storeUser($request);

        if($result instanceof \Illuminate\Support\MessageBag){
            return back()->withInput()->withErrors($result, 'storeUser');
        } else {
            return back()->with('message-success', __('User stored succefully!'));
        }
    }

    public function edit($language, $id, UserServiceInterface $userService)
    {
        $user = $userService->getUserProfile($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update($language, $id, Request $request, UserServiceInterface $userService)
    {
        $update = $userService->updateUserProfile($request, $id);

        if(isset($update['error'])){
            return back()->with('message-error', __($update['error']));
        }

        return back()->with('message-success', __('User updated succefully!'));
    }

    public function destroy($language, $id, UserServiceInterface $userService)
    {
        $destroy = $userService->destroyUser($id);

        return back()->with('message-success', __('User deleted succefully!'));
    }
}
