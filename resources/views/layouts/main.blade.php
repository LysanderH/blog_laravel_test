<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
</head>
<body>

<x-alert {{$isError() ? 'type="error"' : ''}}  :message="{{$getMessage()}}">

    <x-slot name="mes">Salut</x-slot>

</x-alert>

@yield('content')
</body>
</html>
