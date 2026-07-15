<form action="/servis" method="POST" class="bg-white p-6 rounded-xl border border-pink-200">
    @csrf
    <input type="text" name="pelanggan_id" placeholder="ID Pelanggan" class="block w-full mb-3 p-2 border rounded">
    <input type="text" name="keluhan" placeholder="Keluhan" class="block w-full mb-3 p-2 border rounded">
    <input type="number" name="total_biaya" placeholder="Total Biaya" class="block w-full mb-3 p-2 border rounded">
    <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-full hover:bg-yellow-600 transition">
        Simpan Data
    </button>
</form>