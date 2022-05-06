<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index ()
    {
        return view('login/index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

  
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email'=>['required','email:dns'],
                'password'=>'required'
            ]
        );

        if(auth()->attempt(array('email' => $credentials['email'], 'password' => $credentials['password'])))
        {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard');
            }else{
                return redirect('/dashuser');
            }
        }else{
            return redirect('/login')
                ->with('error','Email atau Password anda salah.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
