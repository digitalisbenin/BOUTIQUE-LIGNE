<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function index() {

        $categorie = Categorie::all();
        $article = Article::all();

        return view('accueil', ['categorie' => $categorie, 'article' => $article]);
    }
}
