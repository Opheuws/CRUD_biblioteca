<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nivel_user' => 'required',
          ]);
          Post::create($request->all());
          return redirect()->route('posts.index')
            ->with('success','Post created successfully.');
        echo $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::find($id)-> get();

        return view('posts.show', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nivel_user' => 'required',
        ]);

        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
      return view('posts.edit', compact('posts'));
    }
  
    public function create()
    {
      return view('posts.create');
    }
}
