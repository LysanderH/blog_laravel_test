<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
//        $post = DB::table('posts')->where('id', '=', $id)->first();
//        dd($post);

//        $post = Post::whereSlug($post)->first();

        return view('post.show', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $post = new Post();

        $post->title = \request('title');
        $post->slug = Str::slug(\request('title'));
        $post->body = \request('body');

        $post->save();

        return redirect('/posts');
    }
}
