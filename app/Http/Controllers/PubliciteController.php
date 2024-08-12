<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Publicite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PubliciteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicite = Publicite::orderBy('created_at', 'desc')->paginate(7);

        //$categorie = Categorie::paginate(7);
        return view('publicite.index', compact('publicite'));
    }

    public function indexe()
    {
        //
        $publicite = Publicite::orderBy('created_at', 'desc')->get();
        return response()->json(['success'=>true, 'publicite'=>$publicite],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //$publicite = Publicite::orderBy('created_at', 'desc')->paginate(7);

         //$categorie = Categorie::paginate(7);
         return view('publicite.create');
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
            'nomPublicite' => 'required|string',

        ]);

        $publicite = new Publicite();

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
                    $publicite->imageUrl = $imageUrl;
                   // dd($imageUrl);
                }
            }
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/publicite',$filename);
            $publicite->image_path = $filename;
        }

        /*dd($categorie);*/

        $publicite->nomPublicite = $request->nomPublicite;

        $publicite->save();

        session()->flash('success', 'La publicité à été bien créée !');
        return redirect('publicites')->with('status', "La publicité à été bien créée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function show(Publicite $publicite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //

        $publicite = Publicite::findOrfail($id);
        //dd($publicite);
        return view('publicite.edit', compact('publicite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $this->validate($request, [
        //     'nomPublicite' => 'required|string',
        // ]);
         $publicite = Publicite::findOrfail($id);
         
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
                    $publicite->imageUrl = $imageUrl;
                   // dd($imageUrl);
                }
            }
        }

         if ($request->hasFile('image')) {
             $path='assets/uploads/publicite'.$publicite->image_path;
             if (File::exists($path)) {
                 File::delete($path);
             }
             $file =$request->file('image');
             $ext=$file->getClientOriginalExtension();
             $filename = time().'.'.$ext;
             $file->move('assets/uploads/publicite',$filename);
             $publicite->image_path= $filename;
         }

         $publicite->nomPublicite = $request->nomPublicite;
         $publicite->save();

        session()->flash('success', 'La publicité a été bien modifiée !');
        return redirect('publicites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicite = Publicite::findOrfail($id);
        $publicite->delete();
        session()->flash('success', 'Suppression de la publicité réussie !');
        return redirect('publicites');
    }
}
