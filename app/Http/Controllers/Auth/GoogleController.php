<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            $finduser = User::where('google_id', $user->id)->first();
            
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended(route('mybio'));
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password' => encrypt('123456dummy')
                ]);
                
                Auth::login($newUser);
                return redirect()->intended(route('mybio'));
            }
        } catch (Exception $e) {
            return redirect()->route('mybio')->with('error', 'Google login failed.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
