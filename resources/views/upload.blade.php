<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="bg-white">
        <div class="text-center">
            <h2>Upload Video</h2>
            <form action="{{ url('/upload-video') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title">Judul Video:</label>
                    <input type="text" id="title" name="title" placeholder="Masukkan judul video" required>
                    <br><br>
                    <label for="video">Pilih Video:</label>
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">Pick a file</legend>
                        <input type="file" class="file-input" id="video" accept="video/*" />
                        <label class="fieldset-label">Max size 2MB</label>
                    </fieldset>
                    <br><br>
                    <button type="submit">Upload</button>
                    <div>
            </form>
        </div>
    </section>
</body>

</html>
