<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New article</title>
</head>
<body>
<h1>New article</h1>
<form action="/posts" method="post">
    @csrf
    <div>
        <label for="title">Le titre</label>
        <input type="text" name="title" id="title">
        @error('title')
            <p>Ce titre existe déja</p>
        @enderror
    </div>
    <div>
        <label for="body">Le contenu de votre article</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        @error('body')
            {{$message}}
        @enderror
    </div>
    <input type="submit" value="Enregistrer l'article">
</form>
</body>
</html>
