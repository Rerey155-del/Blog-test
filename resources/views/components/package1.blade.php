<div class="card w-96 bg-[#FF4655] shadow-sm">
    <div class="card-body p-12">
        <h2 class="text-3xl font-bold text-white">{{ $package->name }}</h2>
        <ul class="mt-6 flex flex-col gap-4 text-lg text-white list-disc list-inside mb-10">
            @foreach (explode(',', $package->description) as $desc)
                <li class="text-xl marker:text-xl marker:text-white">{{ trim($desc) }}</li>
            @endforeach
        </ul>
        <div class="flex justify-center gap-x-4">
            <h2 class="text-black font-bold text-2xl line-through decoration-white">600rb</h2>
            <h2 class="text-white text-4xl font-bold">{{ $package->price }}</h2>
        </div>
        <div class="flex justify-center mt-6">
            <button onclick="window.location.href='/package1page'"
                class="bg-white text-[#FF4655] px-6 py-3 rounded-lg w-80 font-semibold hover:bg-red-600 hover:text-white transition">
                Pesan Sekarang
            </button>
        </div>
        <br>
        <p class="text-white text-md text-center font-bold">1x Revisi/item | Add-on (Revisi) 10k</p>
    </div>
</div>
