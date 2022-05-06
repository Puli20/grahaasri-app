<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register/index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store (Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', 'max:8','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:6']
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        
        User :: create($validateData);

        $request->session()->flash('sukses','Registrasi berhasil. Silahkan login');

        return redirect('/login');
    }
}
