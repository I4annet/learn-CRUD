<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD - Isi Biodata Diri </title>
    <link rel="stylesheet" href="/learn-CRUD/css/style.css">
</head>

<body>
    <div class="container">
        <h1> Isi Biodata Diri Anda </h1>
        <form action="../php/create.php" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" name="nim"  id="nim" required>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required>

            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" required>

            <label for="prodi">Prodi:</label>
            <input type="text" name="prodi" id="jurusan" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

