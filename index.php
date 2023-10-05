<?php

// Koneksi ke Database menggunakan file functions.php
require 'functions.php';
// Ambil data dari tabel book
$buku = query('SELECT id, Cover, judul, penulis, tahun_terbit, penerbit FROM buku');
$jumlahData = count(query('SELECT id, Cover, judul, penulis, tahun_terbit, penerbit FROM buku'));

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BukuMilikBersama</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <meta name="author" content="Faqih Firdaus kemal Pangestu 213040033">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">BukuMilikBersama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">MariMeningkatkanPengetahuan</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                    <a class="nav-link" href="https://ffkp2003.githhub.io/">Hiiqaff</a>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row my-3 py-3 align-items-start">
            <div class="col-xl col-md-6 col-sm-12 justify-content-center mb-2">
                <div class="alert alert-light" role="alert">
                    Gudang Buku Online Sederhana menggunakan PHP dan Laragon - BukuMilikBersama
                </div>
                <h3>Daftar Buku</h3>
                <table class="table table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">penulis</th>
                            <th scope="col">tahun_terbit</th>
                            <th scope="col">penerbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>    
                    <tbody>
                        <!-- Looping Data -->
                        <?php if ($jumlahData > 0) : ?>
                            <?php foreach ($buku as $bk) : ?>
                                <tr>
                                    <th scope="row"><?= $bk['id']; ?></th>
                                    <td><img src="<?= $bk['Cover']; ?>" width="100" height="100"></td>
                                    <td><?= $bk['judul']; ?></td>
                                    <td><?= $bk['penulis']; ?></td>
                                    <td><?= $bk['tahun_terbit']; ?></td>
                                    <td><?= $bk['penerbit']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Detail</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- Jika Buku Tidak ada di Database -->
                        <?php else : ?>
                            <tr>
                                <td colspan="7">
                                    <h1>Data Buku tidak ditemukan</h1>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>