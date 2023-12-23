<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <!-- Link ke Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- Form Tambah Barang -->
    <div class="container mt-4">
        <h2>Tambah Barang</h2>

        <form method="post" action="<?= base_url('barang/insert'); ?>">
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="mb-3">
                <label for="harga_barang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
            <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Link ke Bootstrap 5 JS (Popper.js dan Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>