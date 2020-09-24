@extends('layouts.main')
@section('title')
    <title>Créer un article</title>
@endsection
@section('content')
<h1>New article</h1>
<form action="/posts" method="post">
    @csrf
    <div>
        <label for="title">Le titre</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        @error('title')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="body">Le contenu de votre article</label>
        <textarea name="body" id="body" cols="30" rows="10">{{old('body')}}</textarea>
        @error('body')
        <p>{{$message}}</p>
        @enderror
    </div>
    <input type="submit" value="Enregistrer l'article">
</form>
@endsection
