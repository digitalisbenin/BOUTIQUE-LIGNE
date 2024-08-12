<?php

namespace App\Http\Controllers;

use App\Models\Livreur;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;

class LivreursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livreur = Livreur::all();
        return view('livreurs.index', compact('livreur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('livreurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'adresse' => 'required|string',
            'phone' => 'required',
        ]);

        Livreur::create([
            'nom' => $request->nom,
            'prenoms' => $request->prenoms,
            'adresseResidence' => $request->adresse,
            'phoneNumber' => $request->phone,
        ]);
        session()->flash('success', 'Le livreur à été créé avec succès!');
        return redirect('livreurs');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $livreur = Livreur::findOrfail($id);
        return view('livreurs.index', compact('livreur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $livreur = Livreur::findOrfail($id);
        return view('livreurs.edit', compact('livreur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nom' => 'required|string',
            'prenoms' => 'required|string',
        ]);

        $livreur = Livreur::findOrfail($id);
        $livreur->nom = $request->nom;
        $livreur->prenoms = $request->prenoms;
        $livreur->adresseResidence = $request->adresse;
        $livreur->phoneNumber = $request->phone;
        $livreur->save();

        session()->flash('success', 'Les informations du livreur ont été modifiées avec succès !');
        return redirect('livreurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $livreur = Livreur::findOrfail($id);
        $livreur -> delete();
        session()->flash('success', 'Livreur supprimé !');
        return redirect('livreurs');
    }
    public function search(Request $request)
{
    $query = $request->get('query');
    $livreurs = Livreur::where('nom', 'LIKE', "%{$query}%")
        ->orWhere('prenoms', 'LIKE', "%{$query}%")
        ->get();
    return response()->json(['livreurs' => $livreurs]);
}

}
