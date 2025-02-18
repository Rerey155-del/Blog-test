    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/css/app.css'])
    </head>

    <body class="bg-red-500 h-full mb-6 w-full text-default ">
        <x-navbar />
        {{-- <x-header>{{ $title }}</x-header> --}}
        <h1 class="text-3xl font-bold text-white">Hello, ini adalah halaman blog</h1>
        {{-- Looping data --}}
        @foreach ($blogs as $blog)
            <div class="flex flex-wrap justify-center">
                <article
                    class="items-center py-8 max-w-screen-md bg-green-500 rounded-2xl border-b border-gray-300 px-8 mb-7">
                    <a href="{{ url('/blog/' . $blog->id) }}" class="block">
                        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $blog->title }}</h2>
                    </a>
                    <div class="text-base text-gray-500">
                        <a href="#">{{ $blog->author }}</a>
                    </div>
                    <p class="my-4 font-light">{{ $blog->body }}</p>
                    @if ($blog->image)
                        <div>
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                class="w-full max-w-md rounded">
                        </div>
                    @endif
                </article>
            </div>
        @endforeach

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
        