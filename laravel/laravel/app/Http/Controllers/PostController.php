<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // <--- ini penting
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    use AuthorizesRequests; // <--- tambahkan trait ini

    public function index()
    {
        $posts = Post::with('user')->latest()->get(); 
        return view('posts.index', compact('posts'))->with('title', 'Daftar Blog Post');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Auth::user()->posts()->create($validated); 

        return redirect()->route('posts.index')->with('status', 'Post berhasil dibuat!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'))->with('title', $post->title);
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post); 
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post); 

        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('status', 'Post berhasil diperbarui!');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post); 

        $post->delete();

        return redirect()->route('posts.index')->with('status', 'Post berhasil dihapus!');
    }
}
