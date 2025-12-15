<?php

namespace App\Http\Controllers\Api;


use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // GET /api/posts (Menampilkan semua post)
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        
        return response()->json([
            'status' => 'success',
            'data' => $posts
        ]);
    }

    // POST /api/posts (Menambah post baru)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Membuat post menggunakan user yang sedang login via Token
        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Post created successfully',
            'data' => $post
        ], 201);
    }

    // GET /api/posts/{id} (Detail post)
    public function show($id)
    {
        $post = Post::with('user')->find($id);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found'], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $post
        ]);
    }

    // PUT /api/posts/{id} (Update post)
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found'], 404);
        }

        // Cek Authorization sederhana
        if ($request->user()->id !== $post->user_id && !$request->user()->is_admin) {
            return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 403);
        }

        $post->update($request->only('title', 'content'));

        return response()->json([
            'status' => 'success',
            'message' => 'Post updated successfully',
            'data' => $post
        ]);
    }

    // DELETE /api/posts/{id} (Hapus post)
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found'], 404);
        }

        // Cek Authorization
        if ($request->user()->id !== $post->user_id && !$request->user()->is_admin) {
            return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 403);
        }

        $post->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Post deleted successfully'
        ]);
    }
}