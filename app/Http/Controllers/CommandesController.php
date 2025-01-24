<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commande;
use App\Models\Livreur;
use App\Models\LigneCommande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livreur= Livreur::all();
       // $commande = Commande::orderBy('created_at', 'desc') ->where('status', 'En cours','En attente')->get();
       $commande = Commande::orderBy('created_at', 'desc')
    ->whereIn('status', ['En cours', 'En attente','Non Livré'])
    ->get();

        return view('commades.index', compact('commande','livreur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livreur= Livreur::all();
        // $commande = Commande::orderBy('created_at', 'desc') ->where('status', 'En cours','En attente')->get();
        $commande = Commande::orderBy('created_at', 'desc')
     ->where('status', 'Livré')
     ->get();

         return view('commades.history', compact('commande','livreur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');



        if (Auth::check()) {
            $prod_check=Article::where('id',$article_id)->first();
            $montantLigneCommande= $prod_check->prixVenteArticle;
            if ($prod_check)
            {
                if (LigneCommande::where('article_id',$article_id)->where('user_id',Auth::id())->exists())
                 {
                    return response()->json(['status'=>$prod_check->nomArticle." déjà ajouter au panier"]);
                } else
                { $commande= Commande::create([
                    'user_id'=>Auth::id(),

                ]);

                $commandeId=$commande->id;


                    $cartItem = new LigneCommande();
                $cartItem->article_id=$article_id;
                $cartItem->commande_id=$commandeId;
                $cartItem->user_id=Auth::id();
                $cartItem->quantite=$product_qty;
                $cartItem->montantLigneCommande= $montantLigneCommande;
                $cartItem->save();
                return response()->json(['status'=>$prod_check->name." ajouter au panier"]);
                }
            }
        } else {
            return response()->json(['status'=>"Connectez-vous pour continuer"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commande =LigneCommande::where('commande_id',$id)->get();
        return view('commades.show',compact('commande'));
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
        if($request->input('livreur_id')){
            $commande =Commande::find($id);
            $commande->livreur_id=$request->input('livreur_id');
            $commande->status_commande=$request->input('status_commande');
             $commande->status='En cours';
            $commande->update();
            return redirect('commande')->with('status',"Commande valider et  affecter à un livreurs avec succèss");
        }else if($request->input('status_commande')&& !$request->input('livreur_id')){
            $commande =Commande::find($id);
           
            $commande->status_commande=$request->input('status_commande');
             $commande->status='En cours';
            $commande->update();
            return redirect('commande')->with('status',"Commande valider avec succèss");
            
        }
        else{
            $commande =Commande::find($id);
        // $commande->livreur_id=$request->input('livreur_id');
        $commande->status=$request->input('status');
        $commande->update();
        return redirect('commande')->with('status'," Statut de la Commande mise à jour avec succès");
        }

    }
    public function updates(Request $request, $id)
    {

            $commande =Commande::find($id);
        // $commande->livreur_id=$request->input('livreur_id');
        $commande->status=$request->input('status');
        $commande->update();
        return redirect('mes-commandes')->with('success',"Commande livré avec succès");


    }

    public function updatees(Request $request, $id)
    {
        if (Auth::check()) {
            $commande =Commande::find($id);

            $commande->status=$request->input('status');
            $commande->update();
                return response()->json(['success' => true,'message' => "Commande livré avec succès", 'commande'=>$commande], 200);

        } else {
            return response()->json(['success' => false,'message' => "Connectez-vous pour continuer"], 401);
        }
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
    }


}
