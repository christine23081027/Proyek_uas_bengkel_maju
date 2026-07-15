<form action="/kendaraan" method="POST" class="bg-[#1E1E1E] p-6 rounded-xl mb-8 border border-[#333]">
    @csrf
    <input type="number" name="pelanggan_id" placeholder="ID Pelanggan" class="w-full mb-2 p-2 bg-[#2A2A2A] text-white" required>
    <input type="text" name="merk" placeholder="Merk Kendaraan" class="w-full mb-2 p-2 bg-[#2A2A2A] text-white" required>
    <input type="text" name="plat_nomor" placeholder="Plat Nomor" class="w-full mb-4 p-2 bg-[#2A2A2A] text-white" required>
    <button type="submit" class="bg-[#8A2BE2] px-6 py-2 text-white font-bold rounded">Simpan</button>
</form>

<table class="w-full text-white">
    <tr class="bg-[#8A2BE2]">
        <th>ID Pelanggan</th>
        <th>Merk</th>
        <th>Plat Nomor</th>
    </tr>
    @foreach($kendaraan as $k)
    <tr>
        <td class="p-2 border">{{ $k->pelanggan_id }}</td>
        <td class="p-2 border">{{ $k->merk }}</td>
        <td class="p-2 border">{{ $k->plat_nomor }}</td>
    </tr>
    @endforeach
</table>