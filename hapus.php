<?php
// Panggil koneksi database
include "koneksidb.php";
// Persiapan hapus data
if (isset($_POST['bhapus'])) {
    // Persiapan ubah data
    $hapus = mysqli_query($koneksidb, "DELETE FROM tb_crud WHERE nama = '$_POST[nama]'");
    // Jika ubah sukses
    if ($hapus) {
        echo "<script> alert ('Hapus Data Berhasil');
        document.location='data.php';
        </script>";
    } else {
        echo "<script> alert ('Hapus Data Gagal');
        document.location='data.php';
        </script>";
    }
}
?>