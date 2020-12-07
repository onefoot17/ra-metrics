<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        // $credentials = ['email' => $request->email, 'password' => $request->password, 'active' => 1];
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if(Auth::attempt($credentials, $request->remember_me)){

            // Authentication passed...
            return redirect()->intended(route('index'));
        } else {
            return back()->withErrors([
                'password' => [__('auth.failed')]
            ]);
        }
    }

    public function forgotPassword()
    {
        $this->middleware('guest');

        return view('auth.forgot-password');
    }
}
