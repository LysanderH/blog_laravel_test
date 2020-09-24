@extends('layouts.main')
@section('title')
    <title>Liste des artilces</title>
@endsection
@section('content')
    <h1>La liste des posts</h1>
    <ul>
        @if(count($posts))
            @foreach($posts as $post)
                <li><a href="/posts/{{$post->slug}}">{{$post->title}} ({{$post->comments_count}})</a></li>
            @endforeach
        @else
            <p>Il n'y a pas de posts sur le site</p>
        @endif
    </ul>
@endsection
