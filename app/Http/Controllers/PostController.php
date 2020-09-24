<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
//        $posts = Post::with('comments')->get();


        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
//        $post = DB::table('posts')->where('id', '=', $id)->first();
//        dd($post);

//        $post = Post::whereSlug($post)->first();
//        $comments = Comment::where('post_id', $post->id)->get();
        $comments = $post->comments;
        return view('post.show', compact('post', 'comments'));
    }

    public function create()
    {
        $message = "attention";
        return view('post.create', compact('message'));
    }

    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();
//        dd($validatedData);
        $validatedData['slug'] = Str::slug(\request('title'));

        Post::create($validatedData);

        return redirect('/posts');
    }
}
