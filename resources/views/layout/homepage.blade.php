<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelolainAja</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
            <div class="text-center text-white mb-8">
                <h1 class="Font-extrabold text-2xl">Layanan Kami</h1>
                <p>Bisnis Sukses Kelola Tanpa Stress</p>
            </div>
            <div class="flex justify-center gap-12 px-12">
                <div class="card bg-white w-[25rem] shadow-xl">
                    <figure class="p-3">
                        <img src="/img/foto1.png" alt="Shoes" class="rounded-xl w-[21rem]" />
                    </figure>
                    <div class="card-body ">
                        <h2 class="card-title text-black">Manajemen Media Sosial</h2>
                        <p>Mengelola konten, jadwal posting, dan analisis performa media sosial untuk meningkatkan
                            interaksi dan brand awareness bisnis Anda</p>

                    </div>
                </div>
                <div class="card bg-white w-[25rem] shadow-xl">
                    <figure class="p-3">
                        <img src="/img/foto2.png" alt="Shoes" class="rounded-xl w-[21rem]" />
                    </figure>
                    <div class="card-body ">
                        <h2 class="card-title text-black">Layanan Desain</h2>
                        <p>Menyediakan desain logo, konten media sosial, dan materi promosi untuk membangun identitas
                            visual yang kuat dan menarik.</p>

                    </div>
                </div>
                <div class="card bg-white w-[25rem] shadow-xl">
                    <figure class="p-3">
                        <img src="/img/foto3.png" alt="Shoes" class="rounded-xl w-[21rem]" />
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
            <div class="grid grid-cols-4 gap-8">
                @foreach ($videos as $video)
                    <div class="bg-white shadow-lg rounded-lg p-4">
                        {{-- <h3 class="font-semibold text-lg">{{ $video->title }}</h3> --}}
                        <video width="320" height="240" controls class="rounded-lg">
                            <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-6">
                <button class="btn btn-white">Selengkapnya</button>
            </div>
        </div>
        <div class="w-full container mx-auto bg-white pb-4">

            <div class=" grid grid-cols-3 gap-12 p-14">
                {{-- card 1 --}}
                <div class="card w-96 bg-black shadow-sm">
                    <div class="card-body">
                        <div class="flex justify-between">
                            <h2 class="text-3xl font-bold text-[#FF4655]">Package <br> Content Creator</h2>
                        </div>
                        <ul class="mt-6 flex flex-col gap-4 text-md text-white list-disc list-inside">
                            <li>
                                <span class="font-bold text-2xl">Foto</span>
                                <ul class="ml-5 mt-2">
                                    <li class="flex justify-between w-64">
                                        <span>1-5 Foto</span> <span>32k/Design</span>
                                    </li>
                                    <li class="flex justify-between w-64">
                                        <span>6-10 Foto</span> <span>36k/Design</span>
                                    </li>
                                    <li class="flex justify-between w-64">
                                        <span>10+ Foto</span> <span>40k/Design</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="font-bold text-2xl">Video</span>
                                <ul class="ml-5 mt-2">
                                    <li class="flex justify-between w-64">
                                        <span>15-30 Detik</span> <span>50k/Video</span>
                                    </li>
                                    <li class="flex justify-between w-64">
                                        <span>60 Detik</span> <span>75k/Video</span>
                                    </li>
                                    <li class="flex justify-between w-64">
                                        <span>90 Detik</span> <span>95k/Video</span>
                                    </li>
                                </ul>
                            </li>
                            <li class="font">
                                <span class="font-bold text-2xl">Caption</span>
                                <ul class="ml-5 mt-2">
                                    <li class="flex justify-between w-64">
                                        <span>1-3 Posts</span> <span>10k/Posting</span>
                                    </li>
                                    <li class="flex justify-between w-64">
                                        <span>4-5 Posts</span> <span>15k/Posting</span>
                                    </li>
                                    <li class="flex justify-between w-64">
                                        <span>5+ Posts</span> <span>17k/Posting</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                       
                    </div>
                </div>
                
                {{-- card 2 --}}
                <div class="card w-96 bg-[#FF4655] shadow-xl">
                    <div class="card-body">
                        <div class="flex justify-between">
                            <h2 class="text-3xl font-bold text-white">Package<br>Standart</h2>
                        </div>
                        <ul class="mt-4 flex flex-col text-white gap-4 text-md list-disc list-inside">
                            <li>

                                <span class="font-semibold text-xl">Essentials Pack</span> <span
                                    class="float-right font-semibold text-xl">(550rb)</span>
                                <ul class="ml-5 mt-1 text-md space-y-1">
                                    <li>Kalender Konten</li>
                                    <li>8 Feeds (Foto)</li>
                                    <li>3 Reels (Maks. 30 Detik)</li>
                                    <li>4 Stories (Foto)</li>
                                    <li>1 Platform Media Sosial (Opsional)</li>
                                </ul>
                            </li>
                            <li>
                                <span class="font-semibold text-xl">Boost Pack</span> <span
                                    class="float-right font-semibold text-xl">(999rb)</span>
                                <ul class="ml-5 mt-1 text-md space-y-1">
                                    <li>Kalender Konten</li>
                                    <li>14 Feeds (Foto)</li>
                                    <li>6 Reels (Maks. 30 Detik)</li>
                                    <li>4 Stories (Foto)</li>
                                    <li>2 Platform Media Sosial (Opsional)</li>
                                </ul>
                            </li>
                            <li>
                                <span class="font-semibold text-xl">Premium Pack</span> <span
                                    class="float-right font-semibold text-xl">(1.5jt)</span>
                                <ul class="ml-5 mt-1 text-md space-y-1">
                                    <li>Kalender Konten</li>
                                    <li>16 Feeds (Foto)</li>
                                    <li>8 Reels (Maks. 30 Detik)</li>
                                    <li>6 Stories (Foto)</li>
                                    <li>1 Platform Media Sosial (Opsional)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- card 3 --}}
                <div class="card w-96 bg-black shadow-xl">
                    <div class="card-body">
                        <div class="flex justify-between">
                            <h2 class="text-3xl font-bold text-[#FF4655]">Package <br>
                                Costum (by Request)</h2>
                        </div>
                        <ul class="mt-4 flex flex-col text-white gap-4 text-md list-disc list-inside">
                            <li>

                                <span class="font-semibold text-xl">Costum 1</span> <span
                                    class="float-right font-semibold text-xl">(600rb)</span>
                                <ul class="ml-5 mt-1 text-md space-y-1">
                                    <li>Kalender Konten</li>
                                    <li>8 Feeds (Foto)</li>
                                    <li>3 Reels (Maks. 30 Detik)</li>
                                    <li>4 Stories (Foto)</li>
                                    <li>1 Platform Media Sosial (Opsional)</li>
                                </ul>
                            </li>
                            <li>
                                <span class="font-semibold text-xl">Costum 2</span> <span
                                    class="float-right font-semibold text-xl">(1.1 jt)</span>
                                <ul class="ml-5 mt-1 text-md space-y-1">
                                    <li>Kalender Konten</li>
                                    <li>14 Feeds (Foto)</li>
                                    <li>6 Reels (Maks. 30 Detik)</li>
                                    <li>4 Stories (Foto)</li>
                                    <li>2 Platform Media Sosial (Opsional)</li>
                                </ul>
                            </li>
                            <li>
                                <span class="font-semibold text-xl">Costum 3</span> <span
                                    class="float-right font-semibold text-xl">(1.7jt)</span>
                                <ul class="ml-5 mt-1 text-md space-y-1">
                                    <li>Kalender Konten</li>
                                    <li>16 Feeds (Foto)</li>
                                    <li>8 Reels (Maks. 30 Detik)</li>
                                    <li>6 Stories (Foto)</li>
                                    <li>1 Platform Media Sosial (Opsional)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container mx-auto grid grid-cols-3 gap-4 mb-12">
                <div class="flex justify-center">
                    <button class="bg-[#FF4655] text-white px-6 py-3 rounded-lg w-80 font-semibold shadow-lg hover:bg-red-600 transition">
                        Pesan Sekarang
                    </button>
                </div>
                <div class="flex justify-center">
                    <button class="bg-[#FF4655] text-white px-6 py-3 rounded-lg w-80 font-semibold shadow-lg hover:bg-red-600 transition">
                        Pesan Sekarang
                    </button>
                </div>
                <div class="flex justify-center">
                    <button class="bg-[#FF4655] text-white px-6 py-3 rounded-lg w-80 font-semibold shadow-lg hover:bg-red-600 transition">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
            
        </div>
        <x-footer></x-footer>
    </section>
</body>
<script src="{{ mix('js/app.jsx') }}"></script>

</html>
