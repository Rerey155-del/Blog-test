<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-red-500 h-max-screen text-default ">
    <x-navbar />
    {{-- <x-header>{{ $title }}</x-header> --}}
    <h1 class="text-3xl font-bold text-red-500">Hello, ini adalah halaman blog</h1>
    {{-- Looping data --}}
    @foreach ($posts as $post)
        {{-- ====== INI LOOPING DATA YANG DIAMBIL DARI CONTROLLER ===== ( Metode 1 ) --}}
        <div className="flex flex-wrap justify-center">
            <article
                class="items-center py-8 max-w-screen-md bg-green-500  rounded-2xl border-b border-gray-300 px-8 mb-7 ">
                <a href="{{ url('/post/' . $post['id']) }}" class="block">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }}</a>
                </div>
                <p class="my-4 font-light">{{ $post['body'] }}</p>
            </article>
        </div>


        {{-- ========== ini Looping yang datanya diambil dari controller ( Metode 2 ) ========== --}}

        {{-- <div class="flex flex-wrap justify-center">
            <article
                class="items-center py-8 max-w-screen-md bg-green-500 mx-7 rounded-2xl border-b border-gray-300 px-8 mb-7">
                <a href="{{ url('/post/' . $post->id) }}" class="block">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post->author }}</a>
                </div>
                <p class="my-4 font-light">{{ $post->body }}</p>
            </article>
        </div> --}}
    @endforeach

</body>

</html>
