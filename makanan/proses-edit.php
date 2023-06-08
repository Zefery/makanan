<?php

include('login/config.php');

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){    

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $kode = $_POST['kode_makanan'];

    // buat query update
    $sql = "UPDATE ukk_makanan SET nama_makanan='$nama', harga='$harga', stok='$stok', kategori='$kategori', deskripsi='$deskripsi', kode_makanan='$kode' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: home-page.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>