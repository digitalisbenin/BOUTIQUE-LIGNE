<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AccueilArticleController extends Controller
{
    //
    public function index()
    {

        $articles = Article::all();

        return view('accueil', ['article' => $articles]);
    }
}
