<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generos;

class GenerosControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genero = Genero::all();

        return view('genero.index', compact('genero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_genero' => 'required|max:255',
            'description_genere' => 'required',
          ]);
          Genero::create($request->all());
          return redirect()->route('genero.index')
            ->with('success','Genero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genero = Genero::find($id);

        return view('genero.show', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_genero' => 'required|max:255',
            'description_genere' => 'required',
        ]);

        $genero = Genero::find($id);
        $genero->update($request->all());

        return redirect()->route('genero.index')
            ->with('success', 'Genero updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genero = Genero::find($id);
        $genero->delete();

        return redirect()->route('genero.index')
            ->with('success', 'Genero deleted successfully.');
    }

    public function edit($id)
  {
    $genero = Genero::find($id);
    return view('genero.edit', compact('genero'));
  }

  public function create()
  {
    return view('genero.create');
  }
}
