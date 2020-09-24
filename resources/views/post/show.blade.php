@extends('layouts.main')
@section('title')
    <title>{{$post->title}}</title>
@endsection
@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>

    @if(count($comments))
        <ul>
            @foreach($comments as $comment)
                <li>
                    {{$comment->body}}
                </li>
            @endforeach
        </ul>
    @else()
        <p>Pas de commentaires, soyer le premier à commenter</p>
    @endif

    <form action="/comments" method="post">
        @csrf
        <label for="body">Contenu de votre commentaire</label>
        <textarea id="body" name="body"></textarea>
        @error('body')
        <p>{{$message}}</p>
        @enderror
        <input type="hidden" name="post_id" value="{{$post->id}}">
        @error('post_id')
        <p>Don't touch!!!</p>
        @enderror
        <input type="hidden" name="post_slug" value="{{$post->slug}}">
        <input type="submit" value="Commenter ce post">
    </form>
    {{--@if ($errors->any())--}}
    {{--    <div class="alert alert-danger">--}}
    {{--        <ul>--}}
    {{--            @foreach ($errors->all() as $error)--}}
    {{--                <li>{{ $error }}</li>--}}
    {{--            @endforeach--}}
    {{--        </ul>--}}
    {{--    </div>--}}
    {{--@endif--}}

    <a href="/posts">Voir la liste des articles</a>
@endsection
