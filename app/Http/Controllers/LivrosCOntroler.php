<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livros;

class LivrosCOntroler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livro = Livro::all();

        return view('livro.index', compact('livros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_livro' => 'required|max:255',
            'num_pages' => 'required',
            'estoque' => 'required',
          ]);
          Livro::create($request->all());
          return redirect()->route('livro.index')
            ->with('success','Livro created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livro = Livro::find($id);

        return view('livro.show', compact('livros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_livro' => 'required|max:255',
            'num_pages' => 'required',
            'estoque' => 'required',
        ]);

        $livro = Livro::find($id);
        $livro->update($request->all());

        return redirect()->route('livro.index')
            ->with('success', 'Livro updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = Livro::find($id);
        $post->delete();

        return redirect()->route('livro.index')
            ->with('success', 'Livro deleted successfully');
    }

    public function edit($id)
    {
        $livro = Livro::find($id);
      return view('livro.edit', compact('livros'));
    }
  
    public function create()
    {
      return view('livro.create');
    }
}
