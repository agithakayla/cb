<?php
include "koneksidb.php";
if (isset($_POST['btnKirim'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $barang = $_POST['barang'];
    $tanggal = $_POST['tanggalpinjam'];

    $Kirim = mysqli_query($koneksidb, "INSERT INTO tb_crud(nama, kelas, barang, tanggalpinjam)
    VALUES
    ('$nama','$kelas','$barang','$tanggal')");

    if ($Kirim) {
        echo "<script> alert ('berhasil kirim')</script>";
        echo "<script> window.location.href='input.php'</script>";
    } else {
        echo "<script> alert ('Gagal Kirim')</script>";
        echo "<script> window.location.href='input.php'</script>";
    }
}
?>



<html>

<head>
    <title>
        Peminjaman Barang Sarpas
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-purple-200">

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid bg-blue-200">
            <a class="navbar-brand" href="#">
                <h1 class="mx-auto" style="font-size: 2rem;">Peminjaman Barang Sarpas</h1>
            </a>
        </div>
        </div>
    </nav>


    <div class="flex items-center justify-center">
        <form method="post">
            <div class="d-grid gap-2 col-18 ">
                <label for="nama">Nama</label>
                <input type="text" required name="nama" class="form-control">
            </div>
            <div class="d-grid gap-2 col-18 ">
                <label for="kelas">Kelas</label>
                <input type="text" required name="kelas" class="form-control">
            </div>

            <div class="d-grid gap-2 col-18 ">
                <label for="barang">Nama Barang</label>
                <input type="text" name="barang" class="form-control">
            </div>

            <div class="d-grid gap-2 col-18 ">
                <label for="tanggalpinjam">Tanggal pinjam</label>
                <input type="date" required name="tanggalpinjam" class="form-control">



                <div class="d-grid gap-2 col-18 ">
                    <button class="bg-pink-300 text-gray-700 py-2 px-4 rounded mb-4" name="btnKirim" type="submit">Kirim</button>
                </div>

                <button class="bg-pink-300 text-gray-700 py-2 px-4 rounded mb-4"><a href="halamanutama.php">Halaman Utama</a></button>

            </div>
    </div>

    </div>
    </form>
</body>

</html>