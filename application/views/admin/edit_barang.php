<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Tambahkan item menu admin di sini jika diperlukan -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Edit Barang</h2>

        <form method="post" action="<?= base_url('barang/update'); ?>">
            <input type="hidden" name="id" value="<?= $barang->id; ?>">
            <div class="mb-3">
                <label for="nama_barang" class="form-label" Nama Barang></label>
                <input type="text" class="form-control" name="nama_barang" value="<?= $barang->nama_barang; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga_barang" class="form-label" Harga Barang></label>
                <input type="text" class="form-control" name="harga_barang" value="<?= $barang->harga_barang; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label" Jumlah Barang></label>
                <input type="text" class="form-control" name="jumlah_barang" value="<?= $barang->jumlah_barang; ?>" required>
            </div>
            <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>