<form action="/kendaraan" method="POST" class="bg-[#1E1E1E] p-6 rounded-xl mb-8 border border-[#333]">
    <?php echo csrf_field(); ?>
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
    <?php $__currentLoopData = $kendaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="p-2 border"><?php echo e($k->pelanggan_id); ?></td>
        <td class="p-2 border"><?php echo e($k->merk); ?></td>
        <td class="p-2 border"><?php echo e($k->plat_nomor); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\laragon\www\bengkel-maju\resources\views/kendaraan/index.blade.php ENDPATH**/ ?>