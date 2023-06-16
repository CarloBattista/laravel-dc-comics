<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getHome()
    {
        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }

    public function index()
    {
        $comics = Comic::all();

        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'title' => 'required|unique:comics',
        //         'description' => 'unique:comics',
        //         'thumb' => 'unique:comics',
        //         'price' => 'required',
        //         'series' => 'required',
        //         'sale_date' => 'required',
        //         'type' => 'required',
        //     ],
        //     [
        //         'title.required' => 'Devi inserire il titolo del comic',
        //         'title.unique' => 'Esiste già presente un comic con il nome :input',
        //         'price.required' => 'Devi inserire il prezzo del comic',
        //         'series.required' => 'Devi inserire il series del comic',
        //         'sale_date.required' => 'Devi inserire la data del comic',
        //         'type.required' => 'Devi inserire il tipo di comic',
        //     ]
        // );

        $form_data = $request->all();

        $new_Comic = new Comic();
        $new_Comic->fill($form_data);
        $new_Comic->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // $request->validate(
        //     [
        //         'title' => 'required|unique:comics',
        //         'description' => 'unique:comics',
        //         'thumb' => 'unique:comics',
        //         'price' => 'required',
        //         'series' => 'required',
        //         'sale_date' => 'required',
        //         'type' => 'required',
        //     ],
        //     [
        //         'title.required' => 'Devi inserire il titolo del comic',
        //         'title.unique' => 'Esiste già presente un comic con il nome :input',
        //         'price.required' => 'Devi inserire il prezzo del comic',
        //         'series.required' => 'Devi inserire il series del comic',
        //         'sale_date.required' => 'Devi inserire la data del comic',
        //         'type.required' => 'Devi inserire il tipo di comic',
        //     ]
        // );

        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('home');
    }
}
