<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Console\Style\success;
use Illuminate\Support\Facades\File;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article = Article::paginate(7);
        return view('all_products_page.all_products_page', compact('article'));
    }

    public function indexe()
    {
        //
        //$article = Article::with('categorie')->where('status','1')->get();
        $article = Article::where('status','1')->get();
        return response()->json(['success'=>true, 'article'=>$article],200);
    }


    public function indexes($id)
    {
        //
        $article = Article::where('status','1')->where('categorie_id',$id)->get();
        return response()->json(['success'=>true, 'article'=>$article],200);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorie = Categorie::all();
        return view('all_products_page.add_new_product', compact('categorie'));
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
            'categorie_id' => 'required',
            'nomArticle' => 'required|string',
            'codeArticle' => 'required',
            'description' => 'required|string',
            'status' => 'required',
            'prixAchatArticle' => 'required',
            'prixVenteArticle' => 'required',
            'stock' => 'required',
        ]);

        $article = new Article();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
                //dd($image);
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();

                try {
                    $path = $image->storeAs('images', $imageName, 's3');
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Storage failed: ' . $e->getMessage()], 500);
                }

                if ($path) {
                    $imageUrl = Storage::disk('s3')->url($path);
                    $article->imageUrl = $imageUrl;
                   // dd($imageUrl);
                }
            }
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/articles_images', $filename);
            $article->image_path = $filename;
        }

        /*dd($article);*/

        $article->categorie_id = $request->categorie_id;
        $article->nomArticle = $request->nomArticle;
        $article->codeArticle = $request->codeArticle;
        $article->description = $request->description;
        $article->status = $request->status == TRUE ? '1' : '0';
        $article->prixAchatArticle = $request->prixAchatArticle;
        $article->prixVenteArticle = $request->prixVenteArticle;
        $article->stock = $request->stock;
        $article->save();


        session()->flash('success', 'L\'article a été bien créé!');
        return redirect('articles')->with('status', "L'article a été bien créé!");
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
        $article = Article::findOrfail($id);
        return view('articles.index', compact('article'));
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
        $categorie=Categorie::all();
        $article = Article::findOrfail($id);
        return view('articles.index', compact('article','categorie'));
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
            'nomArticle' => 'required|string',
        ]);
        $article = Article::findOrfail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
                //dd($image);
            if ($image->isValid()) {
                $imageName = time() . '.' . $image->getClientOriginalExtension();

                try {
                    $path = $image->storeAs('images', $imageName, 's3');
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Storage failed: ' . $e->getMessage()], 500);
                }

                if ($path) {
                    $imageUrl = Storage::disk('s3')->url($path);
                    $article->imageUrl = $imageUrl;
                   // dd($imageUrl);
                }
            }
        }
        if ($request->hasFile('image')) {
            $path='assets/uploads/articles_images'.$article->image_path;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file =$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/articles_images',$filename);
            $article->image_path= $filename;
        }
        $article->categorie_id = $request->categorie_id;
        $article->nomArticle = $request->nomArticle;
        $article->codeArticle = $request->codeArticle;
        $article->description = $request->description;
        $article->status = $request->status == TRUE ? '1' : '0';
        $article->prixAchatArticle = $request->prixAchatArticle;
        $article->prixVenteArticle = $request->prixVenteArticle;
        $article->stock = $request->stock;
        $article->save();

        session()->flash('success', 'L\'article a été bien modifié!');
        return redirect('articles');
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
        $article = Article::findOrfail($id);
        $article->delete();
        session()->flash('success', 'L\'article a été supprimé!');
        return redirect('articles');
    }
}
