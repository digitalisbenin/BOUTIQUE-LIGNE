<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        $register =  Inscription::all();


        return view('register.index', compact('register'));

    }

    public function registers()
    {

        $register = Inscription::where('user_id',Auth::id())->first();
        return response()->json(['success'=>true, 'code'=>$register],200);

    }
    public function user()
    {
        $user =  User::where('role_id', 2)->get();


        return view('user.index', compact('user'));

    }

}
