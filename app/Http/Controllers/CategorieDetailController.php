<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieDetailController extends Controller
{
    //
    public function detailcategorie($slug)
    {
        //
        $allcategorie = Categorie::where('status','1')->get();

        if (Categorie::where('slug', $slug) -> exists()) {
            $categorie = Categorie::where('slug', $slug)->where('status', '1') -> first();
            $articles = Article::where('categorie_id', $categorie->id)->where('status', '1')->get();
            return view('all_categories_page.category_details', compact('categorie', 'articles', 'allcategorie'));
        }

    }
    // public function detailcategories($slug)
    // {
    //     //
    //     $allcategorie = Categorie::where('status','1')->get();

    //     if (Categorie::where('slug', $slug) -> exists()) {
    //         $categorie = Categorie::where('slug', $slug)->where('status', '1') -> first();
    //         $articles = Article::where('categorie_id', $categorie->id)->where('status', '1')->get();
    //         return view('all_categories_page.category_details', compact('categorie', 'articles', 'allcategorie'));
    //     }

    // }

    public function detailCategories($slug)
    {
        $allcategorie = Categorie::where('status', '1')->get();

        if (Categorie::where('slug', $slug)->exists()) {
            $categorie = Categorie::where('slug', $slug)->where('status', '1')->first();
            $articles = Article::where('categorie_id', $categorie->id)->where('status', '1')->get();
            return response()->json([
                'success'=>true,
                'categorie' => $categorie,
                'articles' => $articles,
                // 'allcategorie' => $allcategorie
            ], 200);
        } else {
            return response()->json([
                'message' => 'Catégorie introuvable ou inactive'
            ], 404);
        }
    }

    public function detailarticle($slug, $codeArticle) {
        //
        $allcategorie = Categorie::where('status', '1')->get();
        if ($categorie = Categorie::where('slug', $slug)->exists()) {
            $articles = Article::where('codeArticle', $codeArticle)->where('status', '1')->first();
            return view('all_products_page.details_article', compact('articles', 'categorie', 'allcategorie'));
        }
    }

    public function detailArticles($slug, $codeArticle)
    {
        $allcategorie = Categorie::where('status', '1')->get();

        if (Categorie::where('slug', $slug)->exists()) {
            $categorie = Categorie::where('slug', $slug)->where('status', '1')->first();
            $article = Article::where('codeArticle', $codeArticle)->where('status', '1')->first();

            if ($article) {
                return response()->json([
                    'success'=>true,
                    'article' => $article,
                    'categorie' => $categorie,
                    // 'allcategorie' => $allcategorie
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Article introuvable ou inactive'
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'Catégorie introuvable ou inactive'
            ], 404);
        }
    }
}
