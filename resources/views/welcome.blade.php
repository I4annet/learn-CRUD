<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Tailwind</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-custom-primary text-white min-h-screen flex items-center justify-center">

  <div class="text-center p-10 rounded-lg shadow-lg bg-white text-custom-secondary">
    <h1 class="text-3xl font-bold mb-4">Halo Resimen Mahasiswa!</h1>
    <p class="text-lg">Ini adalah percobaan menggunakan Tailwind dan warna tema kustom.</p>
    <button class="mt-6 px-4 py-2 bg-yellow-400 hover:bg-yellow-500 text-black rounded">Tombol Coba</button>
  </div>

</body>
</html>
