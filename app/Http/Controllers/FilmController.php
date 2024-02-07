<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();

        return view('film.index', compact('films'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title'=>'string',
            'year'=>'integer',
            'genre'=>'string',
        ]);

        Film::create($data);
        return redirect()->route('film.index');
    }

    public function show(Film $film)
    {
        return view('film.show', compact('film'));
    }

    public function edit(Film $film)
    {
        return view('film.edit', compact('film'));
    }

    public function update(Film $film)
    {
        $data = request()->validate([
            'title' => 'string',
            'year' => 'integer',
            'genre' => 'string',
        ]);

        $film->update($data);
        return redirect()->route('film.show', $film->id);
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('film.index');
    }
}




