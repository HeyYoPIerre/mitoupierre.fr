<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

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
        $filepath = request('image');
        
        if(request('format') == 0)
        {
            $width = 2000;
            $height = 1333;
        }
        else
        {
            $width = 1333;
            $height = 2000;
        }

        $photo = ImageManagerStatic::make($filepath)->fit($width,$height);
        $photoName = Str::random(10) . time() . ".webp";
        Storage::disk('public')->put('/images/' . $photoName, $photo->encode('webp'));


        $image = new Image();
        $image->alt = $request->alt;
        $image->filepath = '/images/' . $photoName;
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
