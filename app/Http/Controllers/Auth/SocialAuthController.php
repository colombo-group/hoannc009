<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();
        $CreateUser = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
        ]);
        
//        Auth::login($CreateUser);
//        return redirect('/');
    }
}
