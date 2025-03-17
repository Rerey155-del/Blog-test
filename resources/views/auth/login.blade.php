<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite('resources/css/app.css')
   
    
</head>
<body>
    <div  class="min-h-screen flex flex-cols-2 bg-white items-center gap-x-16"> 
        <div data-aos="fade-in-right">
           <img src="/img/Pola1.png" class="h-[40.1rem]">
        </div>
        <form  data-aos="zoom-in-right" action="/auth/login" method="POST" class="w-96 flex flex-col justify-center items-center">
            @csrf
            <h1 class="font-bold text-black text-2xl pb-8">Login</h1>
            <input type="email" name="email" class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500" placeholder="Email" required>
    
            <input type="password" name="password" class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500" placeholder="Password" required>
    
            <button type="submit" class="w-full h-14 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition mb-5">Login</button>
            <a href="#" class="pb-12">Forgot Password?</a>

            <a href="#">Create your account</a>
            @if ($errors->any())
                <div class="text-red-500 text-sm mt-2">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </form>
    </div> 
</body>
<script>
    AOS.init();
</script>

</html>


