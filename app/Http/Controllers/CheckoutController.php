<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;
use App\Models\Commande;
use App\Models\Paiement;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class CheckoutController extends Controller

{

    // protected $kkiapay;
    // public function __construct(KkiapayService $kkiapay)

    // {
    //     $this->kkiapay=$kkiapay;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestCommande = Commande::where('user_id',  Auth::id())->orderBy('created_at', 'desc')->first();
        $totalMontant = Commande::where('user_id', Auth::id())->sum('montantTotal');

        $bonus=Inscription::where('user_id', Auth::id())->first();
        $cartitems=Cart::where('user_id', Auth::id())->get();
        return view('shop.checkout', compact('cartitems','totalMontant','bonus','latestCommande'));
    }

    public function indexe()
    {
        //
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return response()->json(['success'=>true, 'panier'=>$cartitems],200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // Commande::orderBy('created_at', 'desc')->get();
        $commande= Commande::orderBy('created_at', 'desc')->where('user_id',Auth::id())->get();

        return view('shop.commande',compact('commande'));
    }
    public function creates()
    {

        $commande= Commande::orderBy('created_at', 'desc')->where('user_id',Auth::id())->get();


        return response()->json(['success'=>true, 'commande'=>$commande],200);
    }

    public function updateTotal(Request $request)
    {
        $request->validate([
            'totalNew' => 'required',
            'bonus' => 'required',
        ]);

        // Récupère les données
        $totalNew = $request->input('totalNew');
        $bonus = $request->input('bonus');
        $useBonus = $request->input('useBonus', false);

        // Calcule le total
        $total = $totalNew - $bonus;

        $request->session()->put('useBonus', $useBonus);
        // Redirige avec le total en tant que paramètre de requête
        return redirect()->route('checkout')->with('total', $total);

    }
    /**
     * Store a newly created resource in storage.
     * Réaliser par IL-Yassine OBAORIN
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mettre la commande  dans la base de données
        $transaction_id = $request->input('transaction_id');
        $total=0;
        //dd($transaction_id);
        if (Auth::check()) {
        if (Auth::check()) {
            $nombreDeLignes = Commande::count();
       // $nombre= 'Commande000'. $nombreDeLignes + 1 ;
            $commande = new Commande();
        $commande->user_id= Auth::id();
        $commande->numeroCommande='C-'.rand(1111,9999);
        $commande->adresseLivraison=$request->input('adresse');
        $commande->livraisonPhoneNumber=$request->input('phone');

        //$total=0;
        $cartitems_total=Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total +=$prod->quantite*$prod->montant;
        }
        $commande->montantTotal=$total;


        $commande->save();
        // Envoyer les information dans la ligne de commande
        $cartitems=Cart::where('user_id', Auth::id())->get();
        //dd($cartitems);
        foreach($cartitems as $value)
        {
            //dd($value);
            LigneCommande::create([

                'commande_id'=>$commande->id,
                'article_id'=>$value->article_id,
                'user_id'=>auth()->user()->id,
                'quantite'=>$value->quantite,
                'montantLigneCommande'=>$value->montant,
            ]);
            $prod = Article::where('id',$value->article_id)->first();
            //dd($prod);
            $prod->stock= $prod->stock-$value->quantite;
            $prod->update();
        }
        // Paiement
        // Paiement::create([

        //     'commande_id'=>$commande->id,
        //     'raisonPaiement'=>'Commande',
        //     'reference'=>$transaction_id,
        //     'montantPaye'=>$total,
        // ]);

        // mettre a jour les information de l' utilisateur
        if(Auth::user()->adresseResidence==NULL)
        {
            $user=User::where('id', Auth::id())->first();
            $user->adresseResidence=$request->input('adresse');
            $user->phoneNumber=$request->input('phone');
            $user->update();


        }
        // Supprimer le panier
        $cartitems=Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);
        // système de parainnages
        $inscription= Inscription::where('user_id', Auth::id())->first();

        $user_ids = [];
        $currentCodeParent = $inscription->codeParents;


        $i = 0;
        while ($i < 4) {
            $identifier = Inscription::where('codeUser', $currentCodeParent)->first();



            $user_ids[] = $identifier->user_id;
           // User::where('id',$identifier->user_id)->increment('points', 1);
            if ($identifier->codeUser === $identifier->codeParents) {
                break;
            }
            $currentCodeParent = $identifier->codeParents;
            $i++;
        }

//dd($user_ids);


// Vérifier si $user_ids contient 4 valeurs
if (count($user_ids) <= 4) {
    // Vérifier si tous les user_ids existent dans la table Commande et si la dernière commande est dans les 30 derniers jours
    $allExist = true;
    $latestCommandes=[];
    foreach ($user_ids as $user_id) {
        $latestCommandes[] = Commande::where('user_id', $user_id)->orderBy('created_at', 'desc')->first();
        $latestCommande = Commande::where('user_id', $user_id)->orderBy('created_at', 'desc')->first();

        if (!$latestCommande || $latestCommande->created_at < Carbon::now()->subDays(30)) {
            $allExist = false;
            break;
        }
        // Calculer la somme des montantTotal de toutes les commandes de l'utilisateur
        $totalMontant = Commande::where('user_id', $user_id)->sum('montantTotal');

        // Vérifier si cette somme est supérieure à 5000
        if ($totalMontant <= 5000) {
            $allExist = false;
            break;
        }
    }

    if ($allExist) {
        // Mettre à jour la colonne bonus pour chaque commande correspondant à chaque user_id
        // foreach ($user_ids as $index => $user_id) {
        //     // Récupérer toutes les commandes pour l'utilisateur courant
        //     $commandes = Commande::where('user_id', $user_id)->get();

        //     foreach ($commandes as $commande) {
        //         // Calculer et mettre à jour la colonne bonus de chaque commande
                    //         if ($index == 0) {
                    //             $commande->bonus = 0.4 * $total; // 40% du total pour le premier bonus
                    //         } else {
                    //             $commande->bonus = 0.2 * $total; // 20% du total pour les trois derniers bonus
                    //         }
                    //         $commande->save();
                    //     }
                    // }

                    foreach ($user_ids as $index => $user_id) {
                        $latestCommande = Inscription::where('user_id', $user_id)->first();
                        $totalnew=$total*0.02;

                        if ($index == 0) {
                            $latestCommande->bonus += 0.5 * $totalnew; // 40% du total pour le premier bonus
                        }elseif ($index == 1) {
                            $latestCommande->bonus += 0.25 * $totalnew;
                        }elseif ($index == 2) {
                            $latestCommande->bonus += 0.15 * $totalnew;
                        }

                        else {
                            $latestCommande->bonus += 0.1 * $totalnew; // 20% du total pour les trois derniers bonus
                        }
                        $latestCommande->save();
                    }
                    return redirect('/')->with([
                        'status' => "Veuillez valider votre commande grâce à l'un des code ci-dessous",
                        'statut' => "MTN: *880*41*480255*Montant #\n Moov: *855*41*480255*Montant #\n Celtics: *889*41*480255*Montant #\n Merci pour votre commande"
                    ]);
                    // Retourner une réponse positive
                    // return response()->json(['status' => 'Bonus mis à jour pour toutes les utilisateurs.Commande éfféctuée avec succès']);
                } else {
                    // Retourner une réponse négative si un ou plusieurs user_ids n'existent pas dans Commande ou si la dernière commande n'est pas dans les 30 derniers jours
                    // return response()->json(['status' => 'Un ou plusieurs utilisateurs n\'a pas éffectué une commande ou la dernière commande n\'est pas dans les 30 derniers jours.Commande éfféctuée avec succès']);
                    // return redirect('/')->with('status',"Commande éfféctuée avec succès");
                    return redirect('/')->with([
                        'status' => "Veuillez valider votre commande grâce à l'un des code ci-dessous",
                        'statut' => "MTN: *880*41*480255*Montant #\n Moov: *855*41*480255*Montant #\n Celtics: *889*41*480255*Montant #\n Merci pour votre commande"
                    ]);
                }
            } else {
                // Retourner une réponse négative si $user_ids ne contient pas 4 valeurs
                // return response()->json(['status' => 'Moins de 4 utilisateur trouvés.Commande éfféctuée avec succès ']);
                return redirect('/')->with([
                    'status' => "Veuillez valider votre commande grâce à l'un des code ci-dessous",
                    'statut' => "MTN: *880*41*480255*Montant #\n Moov: *855*41*480255*Montant #\n Celtics: *889*41*480255*Montant #\n Merci pour votre commande"
                ]);
            }
            return redirect('/')->with([
                'status' => "Veuillez valider votre commande grâce à l'un des code ci-dessous",
                'statut' => "MTN: *880*41*480255*Montant #\n Moov: *855*41*480255*Montant #\n Celtics: *889*41*480255*Montant #\n Merci pour votre commande"
            ]);

            // return redirect('/')->with('status',"Commande éfféctuée avec succès");
                    // return response()->json(['status'=>"Commande éfféctuée avec succès"]);

                    // return response()->json(['status'=>"Commande éfféctuée avec succès"]);
       // return redirect('/dashboard')->with('status',"Commande éffectuée avec succès");
        } else {
            return response()->json(['status'=>"Connectez-vous pour continuer"]);
        }
            } else {
                return redirect('checkout')->with('status',"Payer avant de continuer");
            }

    }
    public function stores(Request $request)
    {

        $transaction_id = $request->input('transaction_id');
        $total=0;
        //dd($transaction_id);
        if ($transaction_id) {
        if (Auth::check()) {
            $nombreDeLignes = Commande::count();
       // $nombre= 'Commande000'. $nombreDeLignes + 1 ;
            $commande = new Commande();
        $commande->user_id= Auth::id();
        $commande->numeroCommande='C-'.rand(1111,9999);
        $commande->adresseLivraison=$request->input('adresse');
        $commande->livraisonPhoneNumber=$request->input('phone');

        //$total=0;
        $cartitems_total=Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total +=$prod->quantite*$prod->montant;
        }
        $commande->montantTotal=$total;


        $commande->save();

        $cartitems=Cart::where('user_id', Auth::id())->get();
        //dd($cartitems);
        foreach($cartitems as $value)
        {
            //dd($value);
            LigneCommande::create([

                'commande_id'=>$commande->id,
                'article_id'=>$value->article_id,
                'user_id'=>auth()->user()->id,
                'quantite'=>$value->quantite,
                'montantLigneCommande'=>$value->montant,
            ]);
            $prod = Article::where('id',$value->article_id)->first();
            //dd($prod);
            $prod->stock= $prod->stock-$value->quantite;
            $prod->update();
        }
        Paiement::create([

            'commande_id'=>$commande->id,
            'raisonPaiement'=>'Commande',
            'reference'=>$transaction_id,
            'montantPaye'=>$total,
        ]);


        if(Auth::user()->adresseResidence==NULL)
        {
            $user=User::where('id', Auth::id())->first();
            $user->adresseResidence=$request->input('adresse');
            $user->phoneNumber=$request->input('phone');
            $user->update();
        }
        $cartitems=Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);


        return response()->json([ 'success' => true,'message'=>"Commande éfféctuée avec succès"],201);

        } else {
            return response()->json(['success' => false,'message'=>"Connectez-vous pour continuer"],401);
        }
    } else {
        return response()->json(['success' => false, 'message' => "Payer avant de continuer"], 404);

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
        return view('shop.detailCommande',compact('commande'));
    }


    public function shows($id)
    {
        $commande =LigneCommande::with('article')->where('commande_id',$id)->get();

        return response()->json(['success'=>true, 'detailCommande'=>$commande],200);
    }

    //

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
        //
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
