<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comment = Commentaire::all();
        return view('commentaires.index', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $this->validate($request, [
                'commentaire' => 'required|string',
            ]);

            Commentaire::create([
                'article_id' => $request->article_id,
                'user_id' => auth()->user()->id,
                'commentaire' => $request->commentaire,
            ]);
            session()->flash('success', 'Merci pour votre commentaire!');
            return redirect('/')->with('status',"Merci pour votre commentaire!");


    }
    // public function stores(Request $request)
    // {
    //     //
    //         $this->validate($request, [
    //             'commentaire' => 'required|string',
    //         ]);

    //         Commentaire::create([
    //             'article_id' => $request->article_id,
    //             'user_id' =>auth()->user()->id,
    //             'commentaire' => $request->commentaire,
    //         ]);

    //         //return redirect('/')->with('status',"Merci pour votre commentaire!");
    //         return response()->json(['success'=>"Merci pour votre commentaire!"],201);


    // }
    public function stores(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'commentaire' => 'required|string',
            'article_id' => 'required|integer|exists:articles,id',
        ]);

        // Vérifier si l'utilisateur est authentifié
        if (Auth::check()) {
            // Créer le commentaire
            Commentaire::create([
                'article_id' => $request->article_id,
                'user_id' => Auth::id(),
                'commentaire' => $request->commentaire,
            ]);

            // Retourner une réponse JSON avec un code de statut 201 (Created)
            return response()->json(['success' => true,'message' => "Merci pour votre commentaire!"], 201);
        } else {
            return response()->json(['success' => false, 'message' => "Vous devez être connecté pour commenter."], 401);

        }
    }

    /**
     *  Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comment = Commentaire::findOrfail($id);
        return view('commentaires.index', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comment = Commentaire::findOrfail($id);
        return view('commentaires.index', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'commentaire' => 'required|string',
        ]);
        $comment = Commentaire::findOrfail($id);
        $comment->commentaire = $request->commentaire;
        $comment->save();
        session()->flash('success', 'Votre commentaire a été modifié!');
        return redirect('commentaires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comment = Commentaire::findOrfail($id);
        $comment->delete();
        session()->flash('success', 'Le commentaire a été supprimé!');
        return  redirect('commentaires');
    }
}
