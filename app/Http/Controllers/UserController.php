<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('fronts.user.login');
    }

    public function signin(UserLoginRequest $request){
        $remember = $request->input('remember_me') ? true : false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $remember)){
            session()->flash('success', 'Вы успешно вошли');
            if (Auth::user()->is_admin){
                return redirect()->route('admin.home');
            }else{
                return redirect()->back();
            }
        }
        return redirect()->back()->with('error' , 'не верно введы емаил или пароль');
    }

    public function register(){
        return view('fronts.user.register');
    }

    public function signup(UserRegisterRequest $request){
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', 'Вы успешно зарегистрировались');
        Auth::login($user);
        return redirect()->home();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->home();
    }
}
