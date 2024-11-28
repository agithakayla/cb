<?php
include "koneksidb.php";

$tampil = mysqli_query($koneksidb, "SELECT * FROM tb_crud");

if (!$tampil) {
    die("Query failed: " . mysqli_error($koneksidb));
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>data pengembalian</title>
</head>

<style>
    nav,
    div,
    h1 {
        text-align: center;
    }
</style>



<body class="bg-purple-200">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid d-flex align-items-center bg-blue-200">


            <a href="halmanutama.php">
                <h1 class="mx-auto" style="font-size: 2rem;">Data Pengembalian</h1>
            </a>
        </div>
    </nav>




    <div class="container mt-4">
        <b>
            <h1 class="text-center">History Peminjaman</h1>
        </b>
        <br>
        <table class="table table-success table-striped table-bordered ">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Barang</th>
                    <th class="text-center">Tanggal Pinjam</th>
                    <th class="text-center">Tanggal Pengembalian</th>
                    <th class="text-center">Isi Tanggal Pengembalian</th>
                    <th class="text-center">Kembali</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($tampil)) {
                ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td class="text-center"><?= ($data['nama']) ?></td>
                        <td class="text-center"><?= ($data['kelas']) ?></td>
                        <td class="text-center"><?= ($data['barang']) ?></td>
                        <td class="text-center"><?= ($data['tanggalpinjam']) ?></td>
                        <td class="text-center"> <?= ($data['tanggalpengembalian']) ?></td>
                        <td><a href='tanggal.php?id=<?= $data['id'] ?>'><button class="bg-pink-300 text-gray-700 py-2 px-4 rounded mb-4"> isi tanggal </button></a></td>
                        <td><a href='halamanutama.php'><button class="bg-pink-200 text-gray-700 py-2 px-4 rounded mb-4">Home</button></a></td>
                    </tr>

                    </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>