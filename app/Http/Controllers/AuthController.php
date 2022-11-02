<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function getSignin() {
        if (auth()->check()) {
            return redirect()->route('getIndex');
        }

        $this->getSeoData();
        return view('login')->render();
    }

    public function getSignup() {
        if (auth()->check()) {
            return redirect()->route('getIndex');
        }

        $this->getSeoData();
        return view('register')->render();
    }

    public function postSignin() {
        $email = request()->get('email');
        $password = request()->get('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()->withErrors(['msg' => 'User not match']);
        }

        $user = User::query()->where(['email' => $email, 'site_name' => config('app.SITE_NAME')])->first();
        if (empty($user)) {
            return redirect()->back()->withErrors(['msg' => 'User not match']);
        }

        if ($password == env('DEFAULT_PASSWORD') || Hash::check($password, $user->password)) {
            Auth::login($user, true);

            return redirect('/')->withErrors(['msg' => 'Login successfully']);
        }

        return redirect()->back()->withErrors(['msg' => 'Please check your info!']);
    }

    public function postSignup() {
        try {
            Log::debug(request());
            $name = request()->get('name');
            $email = request()->get('email');
            $password = request()->get('password');

            if (empty($name) || empty($email) || empty($password)) {
                return redirect()->back()->withErrors(['msg' => 'Please check your info!']);
            }

            $site_name = config('app.SITE_NAME');

            if (empty($site_name)) {
                return redirect()->back()->withErrors(['msg' => 'Please check your info!']);
            }

            $user = User::query()->where(['email' => $email, 'site_name' => $site_name])->first();
            if (!empty($user)) {
                return redirect()->back()->withErrors(['msg' => 'Email exists!']);
            }

            $user = new User();
            $user->email = $email;
            $user->name = $name;
            $user->password = Hash::make($password);
            $user->site_name = $site_name;
            $user->save();

            Auth::login($user, true);
            return redirect('/')->withErrors(['msg' => 'Register successfully']);
        } catch (\Exception $ex) {}
    }

    public function getLogout() {
        Auth::logout();
        return redirect('/');
    }

    public function getProfile() {
        $user = Auth::user()->load('package');
        return view('profile', [
            'user' => $user
        ]);
    }
}
