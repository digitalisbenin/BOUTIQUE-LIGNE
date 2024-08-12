<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Aws\S3\Exception\S3Exception;

use Illuminate\Support\Facades\Storage;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$categorie = Categorie::orderBy('created_at', 'desc')->paginate(7);

        $categorie = Categorie::paginate(7);
        return view('all_categories_page.all_categories_page', compact('categorie'));
    }

    public function indexe()
    {
        //
        $categorie = Categorie::where('status','1')->get();
        return response()->json(['success'=>true, 'categorie'=>$categorie],200);
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
        return view('all_categories_page.add_new_categorie');
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
        //dd($request->file);
        $this->validate($request, [
            'nomCategorie' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string',
             'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $categorie = new Categorie();
        if ($request->hasFile('file')) {
            $image = $request->file('file');
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
                    $categorie->imageUrl = $imageUrl;
                   // dd($imageUrl);
                }
            }
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category_images',$filename);
            $categorie->image_path = $filename;
        }
        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');
          // dd($file);




        //   if ($file->isValid()) {
        //       dd('File is valid'); // Débogage : Confirme que le fichier est valide
        //       $name = time() . $file->getClientOriginalName();
        //       $fileType = $this->getFileType($file);
        //       dd($fileType); // Débogage : Affiche le type de fichier

        //       $path = '';
        //       switch ($fileType) {
        //           case 'image':
        //               $path = 'images';
        //               break;
        //           case 'audio':
        //               $path = 'audios';
        //               break;
        //           case 'video':
        //               $path = 'videos';
        //               break;
        //           case 'pdf':
        //               $path = 'pdfs';
        //               break;
        //           default:
        //               $path = 'images';
        //               break;
        //       }
        //       $url = $file->storePubliclyAs($path, $name, 's3');
        //       $url = "https://apibackout.s3.amazonaws.com/$url";

        //       // Remplir l'URL de l'image de la catégorie
        //       $categorie->imageUrl = $url;

        //       return response()->json(['success' => 'File uploaded successfully', 'url' => $url]);
        //   } else {
        //     $error = $file;
        //     dd($error);
        //       return response()->json(['error' => 'Invalid file'], 400);
        //   };




        // }

        /*dd($categorie);*/

        $categorie->nomCategorie = $request->nomCategorie;
        $categorie->slug = $request->slug;
        $categorie->description = $request->description;
        $categorie->status = $request->status == TRUE ? '1' : '0';
        $categorie->save();

        session()->flash('success', 'La catégorie à été bien créée !');
        return redirect('categories')->with('status', "La catégorie à été bien créée !");
    }



public function mimeToType(string $mime = null): string
{
    if ($mime) {
        if (strstr($mime, 'image/')) {
            return 'image';
        } elseif (strstr($mime, 'video/')) {
            return 'video';
        } elseif (strstr($mime, 'audio/')) {
            return 'audio';
        } elseif ($mime == 'application/pdf') {
            return 'pdf';
        }
    }

    return 'file';
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
        $categorie = Categorie::findOrfail($id);
        return view('categories.index', compact('categorie'));
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
        $categorie = Categorie::findOrfail($id);
        return view('categories.index', compact('categorie'));
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
            'nomCategorie' => 'required|string',
        ]);
         $categorie = Categorie::findOrfail($id);

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
                    $categorie->imageUrl = $imageUrl;
                   // dd($imageUrl);
                }
            }
        }
         if ($request->hasFile('image')) {
             $path='assets/uploads/category_images'.$categorie->image_path;
             if (File::exists($path)) {
                 File::delete($path);
             }
             $file =$request->file('image');
             $ext=$file->getClientOriginalExtension();
             $filename = time().'.'.$ext;
             $file->move('assets/uploads/category_images',$filename);
             $categorie->image_path= $filename;
         }


         $categorie->nomCategorie = $request->nomCategorie;
         $categorie->slug = $request->slug;
         $categorie->description = $request->description;
         $categorie->status = $request->status == TRUE ? '1' : '0';
         $categorie->save();

        session()->flash('success', 'La catégorie a été bien modifiée !');
        return redirect('categories');
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
        $categorie = Categorie::findOrfail($id);
        $categorie->delete();
        session()->flash('success', 'Suppression de la catégorie réussie !');
        return redirect('categories');
    }
}
