<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // il petodo index è il metodo che si usa per la home
    public function index(){
        return view('home');
   }
  
   public function about(){
       return view('about');
   }

   public function contacts(){
       return view('contacts');
   }

   public function comics(){
    $comics = Comic::all();
    return view('comics', compact('comics'));
}
}

