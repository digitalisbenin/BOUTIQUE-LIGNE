<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function stores(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => ["Les informations d'identification fournies sont incorrectes."],
            ]);
        }

        // Create a new token for the user
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([ 'success' => true, 'message' => 'Connecté avec succès', 'token' => $token], 200);

    }

    public function destroys(Request $request)
    {
        $user = $request->user();
        //dd($user);
         if ($user) {
            // Revoke the token that was used to authenticate the current request
             $user->currentAccessToken()->delete();

             return response()->json([ 'success' => true,'message' => 'Déconnecté avec succès', 'user'=>$user], 200);
         }

         return response()->json(['success' => false, 'message' => 'Aucun utilisateur authentifié'], 401);

        // $request->user()->currentAccessToken()->delete();

        // return response()->json(['success' => true,
        //     'message' => "Déconnexion réussie avec succès"
        // ], 204);
    }
}
