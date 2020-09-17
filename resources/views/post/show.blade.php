<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->title}}</title>
</head>
<body>
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
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="post_slug" value="{{$post->slug}}">
    <input type="submit" value="Commenter ce post">
</form>

<a href="/posts">Voir la liste des articles</a>
</body>
</html>
