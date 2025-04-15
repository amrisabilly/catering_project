<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Tailwind</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold">Halaman Siswa</h1>
        <p>Selamat Datang di Halaman CRUD Siswa</p>
        
        <div class="mt-6">
            @yield('konten')
        </div>
    </div>
</body>
</html>
