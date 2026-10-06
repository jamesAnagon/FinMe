<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request) {
        $incomingFields = $request -> validate([
            'loginname' => ['required'],
            'loginpassword' => ['required']
        ]);
        if(auth() -> attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword'] ])){
             $request->session()->regenerate();
        }
        return redirect()->route('dashboard');
    }
    public function register(RegisterRequest $request){
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        auth() -> login($user);
        return redirect()->route('dashboard');
    }
    public function logout(){
        auth() -> logout();
        return redirect()->route('home');
    }
}
