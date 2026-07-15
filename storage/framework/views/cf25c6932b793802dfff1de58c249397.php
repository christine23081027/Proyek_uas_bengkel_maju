<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard - Bengkel Maju Motor</title>
</head>
<body class="bg-[#121212] min-h-screen flex items-center justify-center p-6">

    <div class="bg-[#1E1E1E] border border-[#333] p-10 rounded-3xl shadow-2xl w-full max-w-4xl text-center">
        
        <h1 class="text-4xl font-extrabold text-white mb-2">Bengkel Maju Motor</h1>
        <p class="text-[#8A2BE2] font-medium mb-6">
            Sistem Manajemen Pelanggan, Kendaraan, dan Antrean Servis Terpadu
        </p>

        <div class="inline-block bg-[#2D1B36] border border-[#8A2BE2] text-[#FF69B4] px-4 py-1 rounded-full text-sm font-semibold mb-10">
            User: Christine Angelina
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <a href="/pelanggan" class="bg-[#2A2A2A] hover:bg-[#8A2BE2] border border-[#444] p-6 rounded-2xl transition duration-300 group shadow-lg">
                <span class="block text-white font-bold text-lg group-hover:text-white">Data Pelanggan</span>
                <span class="text-gray-400 text-xs mt-2 block group-hover:text-white">Kelola data diri pelanggan</span>
            </a>
            
            <a href="/kendaraan" class="bg-[#2A2A2A] hover:bg-[#8A2BE2] border border-[#444] p-6 rounded-2xl transition duration-300 group shadow-lg">
                <span class="block text-white font-bold text-lg group-hover:text-white">Data Kendaraan</span>
                <span class="text-gray-400 text-xs mt-2 block group-hover:text-white">Registrasi plat nomor</span>
            </a>

            <a href="/servis" class="bg-[#2A2A2A] hover:bg-[#8A2BE2] border border-[#444] p-6 rounded-2xl transition duration-300 group shadow-lg">
                <span class="block text-white font-bold text-lg group-hover:text-white">Pendaftaran Servis</span>
                <span class="text-gray-400 text-xs mt-2 block group-hover:text-white">Catat antrean & status</span>
            </a>
        </div>
    </div>

</body>
</html><?php /**PATH C:\laragon\www\bengkel-maju\resources\views/dashboard.blade.php ENDPATH**/ ?>