<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();

        return view("pages.comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:3",
            "description" => "required| ",
            /* "thumb" => "required", */
            /* "price" => "required|numeric|gt:0", */
            "series" => "required| ",
            /* "sale_date" => "required|date", */
            /* "type" => "required| " */
        ]);
    
        $data = $request->all();
    
        /* $newComics = new Comics();                COMPRESO NEL "Comics::create($data)"
           $newComics->fill($data);                  COMPRESO NEL "Comics::create($data)" */
        $newComics = Comics::create($data);
    
        /* $newComics->save(); */                 /* COMPRESO NEL "Comics::create($data)" */
    
        return redirect()->route("comics.show", $newComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Comics $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comic)
    {
        return view("pages.comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comics $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comics $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comics $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index")->with("msg", "Fumetto rimosso correttamente");
    }
}
