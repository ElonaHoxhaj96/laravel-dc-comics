<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // il petodo index è il metodo che si usa per la home
    public function index(){
        $title = 'Benvenuti nel CRUD';
        $num_comics = Comic::count();
        $last_comic = Comic::orderby('id','desc')->first();
        $title_last_comic = $last_comic->title;
        return view('home', compact('title', 'num_comics', 'title_last_comic'));
   }
  
   public function about(){
       return view('about');
   }

   public function contacts(){
       return view('contacts');
   }


}

