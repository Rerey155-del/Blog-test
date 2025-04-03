<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="bg-white">
    <section class="grid justify-center p-24">
        <x-navbar></x-navbar>
        <div class="grid grid-cols-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div>
                    <div class="container mx-auto p-10">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
                           
                                <div class="card w-96 bg-[#FF4655] shadow-2xl">
                                    <div class="card-body p-12">
                                        <h2 class="text-3xl font-bold text-white">{{ $paket->name }}</h2>
                                        <ul
                                            class="mt-6 flex flex-col gap-4 text-lg text-white list-disc list-inside mb-10">
                                            @foreach (explode(',', $paket->description) as $desc)
                                                <li class="text-xl marker:text-xl marker:text-white">{{ trim($desc) }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="flex justify-center gap-x-4">
                                            <h2 class="text-black font-bold text-2xl line-through decoration-white">
                                                {{ $paket->price }}</h2>
                                            <h2 class="text-white text-4xl font-bold">{{ $paket->price }}</h2>
                                        </div>
                                        <br>
                                        <p class="text-white text-md text-center font-bold">1x Revisi/item | Add-on
                                            (Revisi) 10k</p>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h2 class="font-bold text-black text-2xl">Produk Dipesan :</h2>
                <p class="text-black">{{ $paket->name }}</p>
                <p class="text-[#FF4655]">{{ $paket->price }}</p>
                <p>pesan :</p>
                <input type="text" placeholder="Accent" class="input input-accent bg-white" />
                <br>
                <p class="font-bold text-black text-2xl">Metode Pembayaran : </p>
                <div class="flex space-x-8">
                    <button class="btn btn-outline">Default</button>
                    <button class="btn btn-outline">Default</button>
                </div>
            </div>
        </div>
        <div class="flex  gap-8 ml-[29rem] mt-[-3rem]">
            <button class=" btn text-red-500 px-4 py-2 rounded-md bg-white border-red-500 w-[12rem]">Rp.32.000</button>
            <button class="bg-red-500 text-white px-6 py-2 rounded-md w-[12rem]">Check Out</button>
        </div>
    </section>
</body>
<script>
    AOS.init();
</script>

</html>
