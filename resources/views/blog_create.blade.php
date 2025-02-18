<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Post</title>
  @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
  <x-navbar />
  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Buat Post Baru</h1>

    {{-- Tampilkan validasi error jika ada --}}
    @if ($errors->any())
      <div class="mb-4">
        <ul>
          @foreach ($errors->all() as $error)
            <li class="text-red-500">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-700">Judul</label>
        <input type="text" name="title" class="w-full p-2 border border-gray-300" placeholder="Judul Post" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Penulis</label>
        <input type="text" name="author" class="w-full p-2 border border-gray-300" placeholder="Nama Penulis" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Konten</label>
        <textarea name="body" class="w-full p-2 border border-gray-300" rows="4" placeholder="Isi Post" required></textarea>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Upload Gambar</label>
        <input type="file" name="image" class="w-full p-2 border border-gray-300" accept="image/*">
      </div>
      <div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
