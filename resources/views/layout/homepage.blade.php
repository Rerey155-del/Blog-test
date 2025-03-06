<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Component</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased">
    <section>
        <x-navbar></x-navbar>
    <main class="max-w-6xl mx-auto px-10 py-10">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="flex flex-col gap-6 text-gray-800">
                <h1 class="text-5xl font-bold leading-tight">
                    Bisnis Sukses<br>Kelola Tanpa Stress<br>
                    di <span class="text-red-500">Kelolainaja</span>
                </h1>
                <p class="text-lg text-gray-600">
                    Kelolainaja adalah platform digital yang menyediakan layanan pengelolaan media sosial dan desain untuk UMKM dan jasa lainnya.
                </p>
                <button class="bg-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600 transition">
                    Temukan selengkapnya
                </button>
            </div>
            <div>
                <img src="https://dashboard.codeparrot.ai/api/image/Z8gJ2bwkNXOiaV6T/illus.png"
                    alt="Kelolainaja Illustration" class="w-[648px] h-[594px] object-contain">
            </div>
        </div>
    </main>
</body>
</html>
