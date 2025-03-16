@vite('resources/css/app.css')

<div class="min-h-screen flex justify-center items-center"> 
    <form action="/auth/login" method="POST" class="w-96 flex flex-col justify-center items-center">
        @csrf
        <input type="email" name="email" class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500" placeholder="Email" required>

        <input type="password" name="password" class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500" placeholder="Password" required>

        <button type="submit" class="w-full h-14 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition mb-5">Login</button>

        @if ($errors->any())
            <div class="text-red-500 text-sm mt-2">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </form>
</div>
