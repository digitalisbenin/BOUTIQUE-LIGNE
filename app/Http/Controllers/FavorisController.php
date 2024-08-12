<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $favoris = Favoris::where('user_id',Auth::id())->get();
        return view('favoris.index', compact('favoris'));
    }

    public function indexe()
    {
        //
        $favoris = Favoris::with('article')->where('user_id',Auth::id())->get();
        return response()->json(['success'=>true, 'favoris'=>$favoris],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $favoris =Favoris::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$favoris]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $article_id = $request->input('product_id');
            if (Article::find($article_id)) {
                // Check if the article is already in the user's favorites
                $existingFavoris = Favoris::where('article_id', $article_id)
                                          ->where('user_id', Auth::id())
                                          ->first();

                if ($existingFavoris) {
                    return response()->json(['status' => "L'article est déjà dans la liste de favoris"]);
                }

                // If not, add the article to favorites
                $favoris = new Favoris();
                $favoris->article_id = $article_id;
                $favoris->user_id = Auth::id();
                $favoris->save();

                return response()->json(['status' => "L'article est ajouté dans la liste de favoris"]);
            } else {
                return response()->json(['status' => "L'article n'existe pas"]);
            }
        } else {
            return response()->json(['status' => "Connectez-vous pour continuer"]);
        }


        // if(Auth::check())
        // {
        //     $article_id=$request->input('product_id');
        //     if(Article::find($article_id) )
        //     {
        //         $favoris=new Favoris();
        //         $favoris->article_id=$article_id;
        //         $favoris->user_id=Auth::id();
        //         $favoris->save();
        //         return response()->json(['status'=>" L'article est ajouté dans la liste de favoris"]);
        //     }

        //     else{

        //         return response()->json(['status'=>" L'article n'existe pas"]);
        //     }
        // }
        // else{
        //     return response()->json(['status'=>"Connectez-vous pour continuer"]);
        // }

        // Favoris::create([
        //     'article_id' => $request->article_id,
        //     'user_id' => auth()->user()->id,
        // ]);
        // session()->flash('success', 'Article ajouté à vos favoris!');
        // return redirect('favoris');
    }

    public function stores(Request $request)
    {
        if (Auth::check()) {
            $article_id = $request->input('article_id');
            if (Article::find($article_id)) {
                // Check if the article is already in the user's favorites
                $existingFavoris = Favoris::where('article_id', $article_id)
                                          ->where('user_id', Auth::id())
                                          ->first();

                if ($existingFavoris) {
                    return response()->json(['success' => true,'message' => "L'article est déjà dans la liste de favoris"], 200);
                }

                // If not, add the article to favorites
                $favoris = new Favoris();
                $favoris->article_id = $article_id;
                $favoris->user_id = Auth::id();
                $favoris->save();

                return response()->json(['success' =>true,'message' => "L'article est ajouté dans la liste de favoris"], 201);
            } else {
                return response()->json(['success' => false,'message' => "L'article n'existe pas"], 404);
            }
        } else {
            return response()->json(['success' => false,'message' => "Connectez-vous pour continuer"], 401);
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
        $favoris = Favoris::findOrfail($id);
        return view('favoris.index', compact('favoris'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        // $favoris = Favoris::findOrfail($id);
        // $favoris->delete();
        // session()->flash('success', 'L\'article a été supprimé de vos favoris!');
        // return  redirect('favoris');
        if(Auth::check())
        {
            $article_id =$request->input('prod_id');
           if(Favoris::where('article_id',$article_id)->where('user_id',Auth::id())->exists())
           {
            $favoris= Favoris::where('article_id',$article_id)->where('user_id',Auth::id())->first();
            $favoris->delete();
            return response()->json(['status'=>"Article supprimer de la liste de favoris avec succès"]);
           }
        }
        else
        {
            return response()->json(['status'=>"Connectez-vous pour continuer"]);
        }
    }

    public function destroys(Request $request)
    {

        if(Auth::check())
        {
            $article_id =$request->input('article_id');
        //    if(Favoris::where('article_id',$article_id)->where('user_id',Auth::id())->exists())
        //    {
        //     $favoris= Favoris::where('article_id',$article_id)->where('user_id',Auth::id())->first();
        //     $favoris->delete();
        //     return response()->json(['success' => true,'status'=>"Article supprimer de la liste de favoris avec succès"],200);
        //    }
        // }
        // else
        // {
        //     return response()->json(['success' => false,'status'=>"Connectez-vous pour continuer"],401);
        // }
        if (Auth::check()) {
            $article_id = $request->input('article_id');
            if (Favoris::where('article_id', $article_id)->where('user_id', Auth::id())->exists()) {
                $favoris = Favoris::where('article_id', $article_id)->where('user_id', Auth::id())->first();
                $favoris->delete();
                return response()->json(['success' => true,'message' => "Article supprimé de la liste de favoris avec succès"], 200);
            } else {
                return response()->json(['success' => false,'message' => "L'article n'est pas dans la liste de favoris"], 404);
            }
        } else {
            return response()->json(['success' => false,'message' => "Connectez-vous pour continuer"], 401);
        }
    }
}

}
