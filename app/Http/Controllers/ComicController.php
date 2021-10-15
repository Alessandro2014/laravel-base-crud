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
    public function index(Request $request)
    {
        $search = $request->query('search');
        $comics = Comic::where('title', 'LIKE', "%$search%")->get();
        return view('comics.index', compact('comics', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDAZIONE
        $request->validate([
            'title' => 'required|max:100|min:5|unique:comics',
            'description' => 'required|string|min:20',
            'price' => 'numeric',
            'thumb' => 'image',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:50',
            'series' => 'required|string|max:50'
        ]);

        $data = $request->all();
        $comic = Comic::create($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('success', $comic->title);
        // $flight->history()->withTrashed()->get();
    }

    public function trash(Comic $comic)
    {
        $comics = Comic::onlyTrashed()->get();
        return view('comics.trash', compact('comics'));
        
    }

    public function restore($id)
    {
        $comic = Comic::withTrashed()->find($id);
        $comic->restore();
        return redirect()->route('comics.index')->with('success', $comic->title);
        
    }
}
