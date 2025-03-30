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
                <x-package11 ></x-package11>
            </div>
            <div class="p-4">
                <h2 class="font-bold text-black text-2xl">Produk Dipesan :</h2>
                <p class="text-black">{paket normal}</p>
                <p class="text-[#FF4655]">{harga}</p>
                <p>pesan :</p>
                <input type="text" placeholder="Accent" class="input input-accent bg-white" />
                <br>
                <p class="font-bold text-black text-2xl">Metode Pembayaran : </p>
                <div class="flex">
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
