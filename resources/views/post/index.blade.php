<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<h1>La liste des posts</h1>
<ul>
    @if(count($posts))
    @foreach($posts as $post)
        <li><a href="/posts/{{$post->slug}}">{{$post->title}}</a></li>
    @endforeach
    @else
    <p>Il n'y a pas de posts sur le site</p>
    @endif
</ul>
</body>
</html>
