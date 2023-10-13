<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Login using auth
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        return redirect(route('profile'));
    }

    /**
     * Register a new user
     */
    public function register(Request $request): RedirectResponse
    {
        $user = new User([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->save();        

        Auth::login($user);

        return redirect(route('login'), 201);
    }

    /**
     * Logout auth user
     */
    public function logout(Request $request): RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();

        return redirect('/');
    }

    /**
     * Profile page
     */
    public function profile(Request $request): View {
        $user = Auth::user();

        return view('perfil.index', [
            'user' => $user
        ]);
    }
}
