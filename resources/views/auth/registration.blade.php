<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen flex items-center justify-between bg-white px-10">
        <!-- Form Section -->
        <div class="w-full md:w-1/2 flex justify-center">

            <form data-aos="zoom-in-right" action="{{ route('register.post') }}" method="POST"
                class="w-96 flex flex-col justify-center items-center">
                @csrf
                <h1 class="font-bold text-black text-2xl pb-8">Register</h1>
                <input type="name" name="name"
                    class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500"
                    placeholder="Name" required>

                <input type="email" name="email"
                    class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500"
                    placeholder="Email" required>

                <input type="password" name="password"
                    class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500"
                    placeholder="Password" required>
                <input type="password" name="password_confirmation"
                    class="w-full h-14 bg-red-100 border-none rounded-lg px-8 text-sm font-medium text-red-500 mb-5 placeholder-gray-500"
                    placeholder="Confirm Password" required>


                <button type="submit"
                    class="w-full h-14 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition mb-5">Daftarkan</button>
                <a href="#" class="pb-4 text-gray-500">Forgot Password?</a>
                <a href="#" class="text-gray-500">Create your account</a>

                @if ($errors->any())
                    <div class="text-red-500 text-sm mt-2">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>
        </div>

        <!-- Image Section -->
        <div data-aos="fade-in-right">
            <img src="/img/Pola2.png" class="h-[40.1rem] ml-[10.9rem]">
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    AOS.init();

    @if (session('success'))
        Swal.fire({
            title: "Registrasi Berhasil!",
            text: "Anda akan diarahkan ke halaman login.",
            icon: "success",
            confirmButtonText: "OK"
        }).then(() => {
            window.location.href = "{{ route('login') }}";
        });
    @endif
</script>

</html>
