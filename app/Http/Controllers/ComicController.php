<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Functions\Helper;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        // dump($comics);
        return view('comic.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = $request->all();
        // dd($data);
        //creo una nuova istanza di comic
        $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->slug = Helper::generateSlug($data['title'], Comic::class);
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb']; 
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        $data['slug'] = Helper::generateSlug($data['title'], Comic::class);
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Comic::find($id);       
        return view('comic.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comics = Comic::find($id);
        return view('comic.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
