<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $images = Image::inRandomOrder()->take(6)->get();

        return view('pages.home', compact('images'));
    }

    public function about()
    {
        return view('pages.a-propos');
    }

    public function portefolio()
    {
       $image = Image::inRandomOrder()->first();

        return view('pages.portefolio', compact('image'));
    }

}
