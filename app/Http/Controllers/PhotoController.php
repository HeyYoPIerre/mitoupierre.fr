<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImage;
use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller

{  
    /**
     * Show the form to create a new blog post.
     */
    public function create()
    {
        return view('pages.admin.photos.create');
    }

    public function index()
    {

        $images = Image::paginate(9);
        
        return view('pages.admin.photos.index', compact('images'));
    }

    public function store(StoreImage $request): RedirectResponse
    {
        $filepath = request('image')->store('images','public');

        $image = new Image();
        $image->alt = $request->alt;
        $image->filepath = $filepath;
        $image->save();

        return redirect('/admin/photos');
    }

    public function destroy(Image $image): RedirectResponse
    {
        // Vérifier si l'image existe (dans le dossier public), si oui, supprimer.
        if (Storage::disk('public')->exists($image->filepath))
        {
            Storage::disk('public')->delete($image->filepath);
        }

        $image->delete();

        return redirect('/admin/photos')->with('success','RIP');
    }
}
