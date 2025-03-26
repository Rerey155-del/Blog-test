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
        <div class="grid grid-cols-2" data-aos="fade-up" >
            <div class="flex flex-col items-center">
                <x-package33></x-package33>
            </div>
            <div class="grid grid-cols-2 p-4 mb-[16rem]">
                <!-- Bagian Foto -->
                <div>
                    <p class="font-semibold text-black  font-bold">Foto:</p>
                    <div class="flex flex-col gap-2">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="1-5 Foto" class="btn bg-white w-[12rem]" />
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="6-10 Foto" class="btn bg-white w-[12rem]" />
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="10+ Foto" class="btn bg-white w-[12rem]" />
                        </label>
                    </div>
                </div>

                <!-- Bagian Video -->
                <div>
                    <p class="font-semibold text-black  font-bold">Video:</p>
                    <div class="flex flex-col gap-2">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="15-30 Detik" class="btn bg-white w-[12rem]" />
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="60 Detik" class="btn bg-white w-[12rem]" />
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="90 Detik" class="btn bg-white w-[12rem]" />
                        </label>
                    </div>
                </div>
                <!-- Bagian Caption -->
                <div >
                    <p class="font-semibold text-black font-bold">Caption:</p>
                    <div class="flex flex-col gap-2">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="1-3 Posts" class="btn bg-white w-[12rem]" />
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="4-5 Posts" class="btn bg-white w-[12rem]" />
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" aria-label="5+ Post" class="btn bg-white w-[12rem]" />
                        </label>
                    </div>
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
