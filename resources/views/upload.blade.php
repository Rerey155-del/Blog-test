<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class=" bg-white text-white w-full h-screen flex flex-col items-center justify-center">
        <div class="text-center  bg-[#FF4654] p-6 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-4">Upload Video</h2>
            <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-lg font-medium pb-4">Judul Video:</label>
                    <input type="text" id="title" name="title" placeholder="Masukkan judul video"
                        class="input input-bordered w-full" required>
                </div>

                <div class="mb-4">
                    <label for="video" class="block text-lg font-medium mb-4">Pilih Video:</label>
                    <fieldset class="border border-gray-300 rounded p-3">

                        <input type="file" class="file-input file-input-bordered w-full" id="video"
                            name="video" accept="video/*" required>
                        <label class="block text-sm text-gray-500 mt-2">Maksimal ukuran 2MB</label>
                    </fieldset>
                </div>

                <button type="submit" class="btn btn-black w-full">Upload</button>
            </form>
        </div>

    </section>
</body>

</html>
