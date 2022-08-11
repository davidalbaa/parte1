<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    @foreach ($items as $item)
        {{ $item['edades'][0] }}
    @endforeach
    {{ $nombre }}

</body>

</html>
