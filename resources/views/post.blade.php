<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
</head>
<body>
    <h1>{{ $blog->title }}</h1>
    <p><strong>Author:</strong> {{ $blog->author }}</p>
    <p>{{ $blog->body }}</p>
    <a href="{{ url('/blog') }}">Kembali</a>
</body>
</html>
