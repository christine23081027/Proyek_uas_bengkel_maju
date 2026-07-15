<!DOCTYPE html>
<html>
<body>
    <h1>Tambah Data Servis</h1>
    <form action="/servis" method="POST">
        <?php echo csrf_field(); ?> 
        <input type="text" name="pelanggan_id" placeholder="ID Pelanggan" required><br>
        <input type="text" name="keluhan" placeholder="Keluhan" required><br>
        <input type="number" name="total_biaya" placeholder="Biaya" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\bengkel-maju\resources\views/servis/create.blade.php ENDPATH**/ ?>