<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'dsc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Info received form Create Post form
        $attributes = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // Add user_id
        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post->update($attributes);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        if (request()->has('fromDashboard')) {
            return redirect('/dashboard');
        } else {
            return redirect('/posts');
        }
    }
}
