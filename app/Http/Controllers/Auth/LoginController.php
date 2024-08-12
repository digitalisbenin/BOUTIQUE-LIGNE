<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/accueil';

    /*
     * protected function authenticated(Request $request, $user)
    {
        if (Auth::user()->role_id == '1') {
            return redirect('dashboard')->with('status', 'Bienvenue sur votre tableau de bord');
        } else if (Auth::user()->role_id == '2') {
            return redirect('/accueil')->with('status', 'Connexion réussie');
        }
    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*protected function redirectTo() {
        if (Auth::user()->roles->pluck('nomRole')->contains('Admin')) {
            return '/dashboard';
        } elseif (Auth::user()->roles->pluck('nomRole')->contains('Client')) {
            return  '/accueil';
        } else {
            return '/accueil';
        }
    }*/
}
