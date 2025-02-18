    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/css/app.css'])
    </head>

    <body class=" h-full mb-6 w-full text-default ">
        <x-navbar />
        {{-- <x-header>{{ $title }}</x-header> --}}
        <h1 class="text-3xl font-bold text-white">Hello, ini adalah halaman blog</h1>
        {{-- Looping data --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mx-3 p-8">
            @foreach ($blogs as $blog)
                <article class="bg-red-900 rounded-xl shadow-lg p-4">

                    <div class="flex justify-center">
                        <img src="{{ $blog->image }}" alt="{{ $blog->title }}"
                            class="w-full h-40 object-cover rounded-xl">
                    </div>
                    <div class="mt-3">
                        <a href="{{ url('/blog/' . $blog->id) }}">
                            <h2 class="text-xl font-semibold text-white font-semibold">{{ $blog->title }}</h2>
                        </a>
                        <p class="text-sm text-white mt-1">{{ Str::limit($blog->content, 50) }}</p>
                        <p class="text-xs text-gray-200 mt-2">{{ Str::limit($blog->body, 80) }}</p>
                    </div>
                </article>
            @endforeach
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
    </body>

    </html>
