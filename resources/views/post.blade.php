<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $post['title'] }}</h1>
    <p><strong>Author:</strong> {{ $post['author'] }}</p>
    <p>{{ $post['body'] }}</p>
    <a href="{{ url('/blog') }}">Kembali</a>
</body>
</html>
