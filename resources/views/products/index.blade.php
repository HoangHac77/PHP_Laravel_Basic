<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is product pages</h1>
    {{-- <h1>Title: {{ $title }}</h1>
    <h1>a: {{ $a }}</h1>
    <h1>b: {{ $b }}</h1> --}}
    {{-- <h1>name: {{ $name }}</h1> --}}
    {{-- @foreach ($product as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}
    {{-- <h3>{{ $product }}</h3> --}}
    <a href="{{ route('products') }}">Link to products</a>
</body>
</html>