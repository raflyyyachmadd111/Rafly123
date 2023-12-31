<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
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
        <div class="container">
            <h2 class="text-center">Daftar Barang</h2>
            <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-success">Tambah Barang</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Barang </th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($barang as $item) : ?>
                        <tr>
                            <th scope="row"><?= $item->id; ?></th>
                            <td><?= $item->nama_barang; ?></td>
                            <td><?= $item->harga_barang; ?></td>
                            <td><?= $item->jumlah_barang; ?></td>
                            <td>
                                <a href="<?= base_url('barang/edit/' . $item->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('barang/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm
                                ('Apakah anda yakin ingin menghapus barang ini')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>