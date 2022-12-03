<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = DB::table('galleries')->get();
        return view('admin.upload.create-gallery',[
            'galleries' => $gallery,
        ]);
    }

    public function list()
    {
        $contact = DB::table('contacts')->get();
        $gallery = DB::table('galleries')->paginate(8);
        $carousel = DB::table('carousels')->get();
        return view('gallery',[
            'galleries' => $gallery,
            'carousels' => $carousel,
            'contacts' => $contact,
            'title' => 'GALERI'

        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery-images');
        }

        Gallery::create($validatedData);
        return redirect('/gallery-settings')->with('success', 'Upload gambar berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery,$id)
    {
        if($gallery->image){
            Storage::delete($gallery->image);
        }

        Gallery::destroy($id);
        return redirect('/gallery-settings')->with('success', 'Gambar berhasil dihapus');
    }
}
