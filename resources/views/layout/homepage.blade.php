<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>He</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel + DaisyUI</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <section class="bg-white">
        <x-navbar></x-navbar>
        <main class="max-w-6xl mx-auto px-10 py-10">
            <div class=" flex flex-col md:flex-row items-center justify-between">
                <div class="flex flex-col gap-6 text-gray-800">
                    <h1 class="text-5xl font-bold leading-tight">
                        Bisnis Sukses<br>Kelola Tanpa Stress<br>
                        di <span class="text-red-500">Kelolainaja</span>
                    </h1>
                    <p class="text-lg text-gray-600">
                        Kelolainaja adalah platform digital yang menyediakan layanan pengelolaan media sosial dan desain
                        untuk UMKM dan jasa lainnya.
                    </p>
                    <button
                        class="bg-red-500 text-white p-5 rounded-lg font-bold hover:bg-red-600 transition w-[15rem]">
                        Find Out More
                    </button>
                </div>
                <div>
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8gJ2bwkNXOiaV6T/illus.png"
                        alt="Kelolainaja Illustration" class="w-[648px] h-[594px] object-contain">
                </div>
            </div>
        </main>
        <div class="h-[40rem] w-full bg-[#FF4655]  p-20">
            <div class="text-center text-white mb-12">
                <h1 class="Font-extrabold text-2xl">Layanan Kami</h1>
                <p>Bisnis Sukses Kelola Tanpa Stress</p>
            </div>
            <div class="flex justify-center gap-12">
                <div class="card bg-white w-[25rem] shadow-xl">
                    <figure class="p-3">
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body ">
                        <h2 class="card-title text-black">Manajemen Media Sosial</h2>
                        <p>Mengelola konten, jadwal posting, dan analisis performa media sosial untuk meningkatkan
                            interaksi dan brand awareness bisnis Anda</p>

                    </div>
                </div>
                <div class="card bg-white w-[25rem] shadow-xl">
                    <figure class="p-3">
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body ">
                        <h2 class="card-title text-black">Layanan Desain</h2>
                        <p>Menyediakan desain logo, konten media sosial, dan materi promosi untuk membangun identitas
                            visual yang kuat dan menarik.</p>

                    </div>
                </div>
                <div class="card bg-white w-[25rem] shadow-xl">
                    <figure class="p-3">
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body ">
                        <h2 class="card-title text-black">Manajemen Media Sosial</h2>
                        <p>Mengelola konten, jadwal posting, dan analisis performa media sosial untuk meningkatkan
                            interaksi dan brand awareness bisnis Anda</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 p-20 justify-center items-center">
            <div><img src="/img/Avatar2.png" alt="" class="w-[30rem] h-[30rem] object-cover"></div>
            <div>
                <div class="mb-6 text-black">
                    <h1 class="Font-extrabold text-2xl">Keunggulan Kami</h1>
                    <p>Tingkatkan kehadiran bisnis anda dengan layanan unggulan kami</p>
                </div>
                <div class="grid gap-8">
                    <div class="card w-100 bg-base-100 card-xs shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">One-Stop Solution</h2>
                            <p>Semua layanan pengelolaan digital dan desain di satu tempat.</p>
                        </div>
                    </div>
                    <div class="card w-100 bg-base-100 card-xs shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Harga Terjangkau</h2>
                            <p>Layanan berkualitas dengan harga yang ramah untuk bisnis kecil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  bg-[#FF4654] p-14">
            <h1 class="text-center text-2xl text-white font-bold mb-6">Pilihan portofolio yang telah bekerja sama dengan
                Kami</h1>
            <div class="grid crid-cols-4 gap-8">
                @foreach ($videos as $video)
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h3 class="font-semibold text-lg">{{ $video->title }}</h3>
                    <video width="320" height="240" controls>
                        <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</body>
<script src="{{ mix('js/app.jsx') }}"></script>

</html>
