<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Servis - Bengkel Maju</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white p-8">

    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Pendaftaran Servis</h1>

        <form action="/servis" method="POST" class="bg-gray-800 p-6 rounded-xl shadow-lg mb-8 border border-gray-700">
            @csrf
            
            <div class="mb-4">
                <label class="block mb-2 font-semibold">Pilih Pelanggan:</label>
                <select name="pelanggan_id" class="w-full p-2 bg-gray-700 rounded border border-gray-600 focus:outline-none focus:border-purple-500" required>
                    <option value="">-- Pilih Nama Pelanggan --</option>
                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">Pilih Kendaraan:</label>
                <select name="kendaraan_id" class="w-full p-2 bg-gray-700 rounded border border-gray-600 focus:outline-none focus:border-purple-500" required>
                    <option value="">-- Pilih Merk & Plat Nomor --</option>
                    @foreach($kendaraan as $k)
                        <option value="{{ $k->id }}">{{ $k->merk }} - {{ $k->plat_nomor }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">Keluhan:</label>
                <textarea name="keluhan" rows="3" placeholder="Jelaskan kerusakan motor..." class="w-full p-2 bg-gray-700 rounded border border-gray-600 focus:outline-none focus:border-purple-500" required></textarea>
            </div>

            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                Simpan Pendaftaran
            </button>
        </form>

        <h2 class="text-xl font-bold mb-4">Daftar Antrean Servis</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left bg-gray-800 rounded-lg overflow-hidden border border-gray-700">
                <thead class="bg-purple-600">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Keluhan</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Waktu</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach($servis as $s)
                    <tr class="hover:bg-gray-700">
                        <td class="p-3">{{ $s->id }}</td>
                        <td class="p-3">{{ $s->keluhan }}</td>
                        <td class="p-3">
                            <span class="bg-green-600 text-xs px-2 py-1 rounded">{{ $s->status }}</span>
                        </td>
                        <td class="p-3">{{ $s->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>