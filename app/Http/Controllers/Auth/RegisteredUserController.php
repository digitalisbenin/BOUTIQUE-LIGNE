<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Inscription;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'codeParents' => ['required', 'string', 'max:255',],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $roleId=Role::where('nomRole','Client')->first();
        $user = User::create([
            'nom' => $request->name,
            'prenoms' => $request->prenoms,
            'email' => $request->email,
            'codeParents' => $request->codeParents,
            'role_id' => $roleId->id,
            'password' => Hash::make($request->password),
        ]);
        $nombre =Inscription::count();

        $register = Inscription::create([
            'user_id' => $user->id,
            'codeParents' => $request->codeParents,
            'codeUser' =>'D000'.$nombre +1,

        ]);

        $user_ids = [];
        $currentCodeParent = $request->codeParents;


        $i = 0;
        while ($i < 4) { // Vous avez mentionné que vous avez mis 10 itérations
            $identifier = Inscription::where('codeUser', $currentCodeParent)->first();



            $user_ids[] = $identifier->user_id;
            User::where('id',$identifier->user_id)->increment('points', 1);
            if ($identifier->codeUser === $identifier->codeParents) {
                break; // Sortir de la boucle si $identifier est vide
            }
            $currentCodeParent = $identifier->codeParents; // Mettre à jour pour le prochain filtre
            $i++;
        }

        // for ($i = 0; $i <7; $i++) {
        //     $identifier = Inscription::where('codeUser', $currentCodeParent)->first();

        //     if (!$identifier) {
        //         break; // Sortir de la boucle si $identifier est vide
        //     }

        //     $user_ids[] = $identifier->user_id;
        //     User::where('id',$identifier->user_id)->increment('points', 1);
        //     $currentCodeParent = $identifier->codeParents; // Mettre à jour pour le prochain filtre
        // }

        // if ($request->has('codeParents')) {
        //     $currentCodeParent = $request->codeParents;

        //     for ($i = 0; $i < 5; $i++) {
        //         $identifier = Inscription::where('codeUser', $currentCodeParent)->first();

        //         if ($identifier) {
        //             $user_ids[] = $identifier->user_id;
        //             User::where('id',$identifier->user_id)->increment('points', 1);
        //             $currentCodeParent = $identifier->codeParents; // Mettre à jour pour le prochain filtre
        //         } else {
        //             break; // Sortir de la boucle s'il n'y a pas de résultat
        //         }
        //     }
        // }

        // if ($request->has('codeParents')) {
        //     // Premier filtre
        //     $identifier = Inscription::where('codeUser', $request->codeParents)->first();

        //     if ($identifier) {
        //         // Stocker le premier user_id
        //         $user_ids[] = $identifier->user_id;
        //         User::where('id',$identifier->user_id)->increment('points', 1);

        //         // Deuxième filtre
        //         $result = Inscription::where('codeUser', $identifier->codeParents)->first();

        //         if ($result) {
        //             // Stocker le deuxième user_id
        //             $user_ids[] = $result->user_id;
        //             User::where('id',$identifier->user_id)->increment('points', 1);

        //             $resul = Inscription::where('codeUser', $result->codeParents)->first();

        //             if ( $resul) {

        //                 $user_ids[] = $result->user_id;
        //                 User::where('id',$resul->user_id)->increment('points', 1);
        //             }
        //         }



        //     }
        // }
       // dd( $user_ids);
        // $code = User::where('codeParents', $request->codeParents)
        //     ->where('id', '!=', $user->id)
        //     ->increment('points', 1);

          //$identifier= Inscription::where('codeUser',$request->codeParents)->first();
        // dd($identifier);
         //$points=User::where('id',$identifier->user_id)
         //->increment('points', 1);
        // Initialiser le compteur pour suivre le nombre d'itérations

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
       // return redirect('login');
    }

    public function stores(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'codeParents' => ['required', 'string', 'max:255',],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $roleId=Role::where('nomRole','Client')->first();
        $user = User::create([
            'nom' => $request->name,
            'prenoms' => $request->prenoms,
            'email' => $request->email,
            'codeParents' => $request->codeParents,
            'role_id' => $roleId->id,
            'password' => Hash::make($request->password),
        ]);
        $nombre =Inscription::count();

        $register = Inscription::create([
            'user_id' => $user->id,
            'codeParents' => $request->codeParents,
            'codeUser' =>'D000'.$nombre +1,

        ]);
         $user_ids = [];
        $currentCodeParent = $request->codeParents;


        $i = 0;
        while ($i < 4) { // Vous avez mentionné que vous avez mis 10 itérations
            $identifier = Inscription::where('codeUser', $currentCodeParent)->first();



            $user_ids[] = $identifier->user_id;
            User::where('id',$identifier->user_id)->increment('points', 1);
            if ($identifier->codeUser === $identifier->codeParents) {
                break; // Sortir de la boucle si $identifier est vide
            }
            $currentCodeParent = $identifier->codeParents; // Mettre à jour pour le prochain filtre
            $i++;
        }
       // dd($user_ids);
        // $code = User::where('codeParents', $request->codeParents)
        //     ->where('id', '!=', $user->id)
        //     ->increment('points', 1);


        // $identifier= Inscription::where('codeUser',$request->codeParents)->get();

        // if ($identifier->user_id) {
        //     $points=User::where('id',$identifier->user_id)
        //     ->increment('points', 1);
        // }
        // $identifier = Inscription::where('codeUser', $request->codeParents)->first();

        // if ($identifier && $identifier->user_id) {
        //     User::where('id', $identifier->user_id)->increment('points', 1);
        // }

              $token = $user->createToken('api-token')->plainTextToken;
            return response()->json([ 'success' => true,'message' => 'Inscription réussi', 'token' => $token], 201);

    }
}
