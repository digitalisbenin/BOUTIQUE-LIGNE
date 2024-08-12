<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Commande;
use App\Models\Cart;
use App\Models\Inscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartitems=Cart::where('user_id', Auth::id())->get();
        return view('shop.cart', compact('cartitems'));
    }

    public function indexe()
    {
        //
        $cartitems = Cart::with('article')->where('user_id',Auth::id())->get();
        return response()->json(['success'=>true, 'panier'=>$cartitems],200);
    }

    public function bonus()
    {
        $latestCommande = Commande::where('user_id',  Auth::id())->orderBy('created_at', 'desc')->first();
        $totalMontant = Commande::where('user_id', Auth::id())->sum('montantTotal');
        $bonus=Inscription::where('user_id', Auth::id())->first();
       if($totalMontant >= 5000 && $bonus !== null && $bonus->bonus >= 5000 && $latestCommande->created_at > Carbon::now()->subDays(30)){
        return response()->json(['success'=>true, 'bonus'=>$bonus],200);
       }else {
        return response()->json(['success'=>false, 'message'=>"vous n'avez pas droit au bonus",'bonus'=>$bonus],400);
       }


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartcount =Cart::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$cartcount]);
    }

    public function creates()
    {
        $cartcount =Cart::where('user_id',Auth::id())->get();
        return response()->json($cartcount);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article_id = $request->input('article_id');
        $product_qty = $request->input('quantite');
        $prix = $request->input('montantLigneCommande');



        if (Auth::check()) {
            $prod_check=Article::where('id',$article_id)->first();
            //dd($product_qty);
            if ($prod_check)

            {
                if (Cart::where('article_id',$article_id)->where('user_id',Auth::id())->exists())
                 {
                    return response()->json(['status'=>$prod_check->nomArticle." déjà ajouter au panier"]);
                } else
                {

                    $cartItem = new Cart();
                $cartItem->article_id=$article_id;
                $cartItem->user_id=Auth::id();
                $cartItem->quantite=$product_qty;
                $cartItem->montant= $prix;
                $cartItem->save();
                return response()->json(['status'=>$prod_check->name." ajouter au panier"]);
                }
            }
        } else {
            return response()->json(['status'=>"Connectez-vous pour continuer"]);

        }
    }

    public function stores(Request $request)
    {
        // Validation des données d'entrée
        $request->validate([
            'article_id' => 'required',
            'quantite' => 'required',
            'montant' => 'required',
        ]);

        $article_id = $request->input('article_id');
        $product_qty = $request->input('quantite');
        $prix = $request->input('montant');

        if (Auth::check()) {
            $prod_check = Article::find($article_id);

            if ($prod_check) {
                if (Cart::where('article_id', $article_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['success'=>true,'message' => $prod_check->nomArticle . " déjà ajouté au panier"],200);
                } else {
                    $cartItem = new Cart();
                    $cartItem->article_id = $article_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->quantite = $product_qty;
                    $cartItem->montant = $prix;
                    $cartItem->save();

                    return response()->json(['success'=>true,'message' => $prod_check->nomArticle . " ajouté au panier"] ,201);
                }
            }
        } else {
            return response()->json(['success'=>false,'message' => "Connectez-vous pour continuer"], 401);
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
        //
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
    public function update(Request $request)
    {
        $prod_id= $request->input('article_id');
        $product_qty= $request->input('quantite');
       // dd($prod_id);
        if(Auth::check()){
            if(Cart::where('article_id',$prod_id)->where('user_id',Auth::id())->exists())
           {
            $cart=Cart::where('article_id',$prod_id)->where('user_id',Auth::id())->first();
            $cart->quantite=$product_qty;
            $cart->update();
            return response()->json(['status'=>"Quantité mise a jour"]);
           }
        }
    }


    // public function updates(Request $request)
    // {
    //     $prod_id= $request->input('article_id');
    //     $product_qty= $request->input('quantite');


    //     if(Auth::check()){
    //         if(Cart::where('article_id',$prod_id)->where('user_id',Auth::id())->exists())
    //        {
    //         $cart=Cart::where('article_id',$prod_id)->where('user_id',Auth::id())->first();
    //         $cart->quantite=$product_qty;
    //         $cart->update();
    //         return response()->json(['success'=>true,'status'=>"Quantité mise a jour"],200);
    //        }
    //     }else {
    //         return response()->json(['success'=>false,'status' => "Connectez-vous pour continuer"], 401);
    //     }
    // }
    public function updates(Request $request)
    {
        $prod_id = $request->input('article_id');
        $product_qty = $request->input('quantite');
        $user = $request->user();
        if (Auth::check()) {
            $user_id = Auth::id();
            $cartItem = Cart::where('article_id', $prod_id)->where('user_id', $user_id)->first();

            if ($cartItem) {
                $cartItem->quantite = $product_qty;
                $cartItem->update();

                return response()->json(['success' => true, 'message' => "Quantité mise à jour",'panier'=>$cartItem], 200);
            } else {
                return response()->json(['success' => false, 'message' => "Article non trouvé dans le panier"], 404);
            }
        } else {
            return response()->json(['success' => false, 'message' => "Connectez-vous pour continuer",'user'=>$user], 401);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if(Auth::check())
        {
            $article_id =$request->input('article_id');
            //dd($article_id);
           if(Cart::where('article_id',$article_id)->where('user_id',Auth::id())->exists())
           {
            $cartItem= Cart::where('article_id',$article_id)->where('user_id',Auth::id())->first();
            $cartItem->delete();
            return response()->json(['status'=>"Produit supprimer avec success"]);
           }
        }
        else
        {
            return response()->json(['status'=>"Connectez-vous pour continuer"]);

        }
    }

    // public function destroys(Request $request)
    // {
    //     $user = $request->user();

    //     Log::info('User attempting to authenticate', ['user' => $request->user()]);
    //     if (Auth::check()) {
    //         $article_id = $request->input('article_id');
    //         $user_id = Auth::id();
    //         $cartItem = Cart::where('article_id', $article_id)->where('user_id', $user_id)->first();
    //         Log::info('User authenticated', ['user_id' => $user_id, 'article_id' => $article_id]);
    //         if ( $cartItem) {

    //             $cartItem->delete();
    //             return response()->json(['success' => true,'status' => "Produit supprimé avec succès"], 200);
    //         } else {
    //             return response()->json(['success' => false,'status' => "Article non trouvé dans le panier"], 404);
    //         }
    //     } else {
    //         Log::warning('User not authenticated');
    //         return response()->json(['success' => false,'status' => "Connectez-vous pour continuer", 'user'=>$user], 401);
    //     }
    // }
    public function destroys(Request $request)
{
    $user = $request->user();


    if (Auth::check()) {
        $article_id = $request->input('article_id');
        $user_id = Auth::id();


        $cartItem = Cart::where('article_id', $article_id)->where('user_id', $user_id)->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => true, 'message' => "Produit supprimé avec succès"], 200);
        } else {
            return response()->json(['success' => false, 'message' => "Article non trouvé dans le panier"], 404);
        }
    } else {

        return response()->json(['success' => false, 'message' => "Connectez-vous pour continuer", 'user' => $user], 401);
    }
}

}
