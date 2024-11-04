<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;

class moviesController extends Controller
{
    public function index(){
        $movies = movies::all();
        return view('movies.index', ['movies' => $movies]);
    }

    public function create(){
        return view('movies.create');
    }

    public function edit(movies $movies){
        return view('movies.edit', ['movies' => $movies]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'release' => 'required',
            'duration' => 'required',
            'description' => 'required'
        ]);

        $newmovies = movies::create($data);
        return redirect(route('movies.index'));
    }

    public function update(movies $movies, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'release' => 'required',
            'duration' => 'required',
            'description' => 'required'
        ]);

        $movies->update($data);
        return redirect(route('movies.index'))->with('success', 'Movie updated successfully');
    }

    // Tambahkan fungsi destroy untuk menghapus movie
    public function destroy(movies $movies)
    {
        $movies->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }
}
