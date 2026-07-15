<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#121212] text-white p-10">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-[#8A2BE2]">Manajemen Pelanggan</h2>
        
        <form action="/pelanggan" method="POST" class="bg-[#1E1E1E] p-6 rounded-xl mb-8 border border-[#333]">
            <?php echo csrf_field(); ?>
            <input type="text" name="nama" placeholder="Nama" class="bg-[#2A2A2A] p-3 w-full mb-2 rounded" required>
            <input type="text" name="telepon" placeholder="Telepon" class="bg-[#2A2A2A] p-3 w-full mb-2 rounded" required>
            <textarea name="alamat" placeholder="Alamat" class="bg-[#2A2A2A] p-3 w-full mb-4 rounded"></textarea>
            <button type="submit" class="bg-[#8A2BE2] px-6 py-2 rounded font-bold">Simpan</button>
        </form>

        <table class="w-full bg-[#1E1E1E] rounded-xl overflow-hidden border border-[#333]">
            <tr class="bg-[#8A2BE2]">
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Telepon</th>
                <th class="p-3 text-left">Alamat</th>
            </tr>
            <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-b border-[#333]">
                <td class="p-3"><?php echo e($p->nama); ?></td>
                <td class="p-3"><?php echo e($p->telepon); ?></td>
                <td class="p-3"><?php echo e($p->alamat); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\bengkel-maju\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>