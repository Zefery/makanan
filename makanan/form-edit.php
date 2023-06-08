<?php

    include("login/config.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: home-page.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM ukk_makanan WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    $ukk_makanan = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link rel="stylesheet" href="form.css">
</head>

<body >
    <header>
        <h1>Formulir Edit Siswa</h1>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $ukk_makanan['id'] ?>" />

        <p>
            <label for="nama_makanan">Nama : </label>
            <input type="text" name="nama_makanan" placeholder="nama Makanan" value="<?php echo $ukk_makanan['nama_makanan'] ?>" />
        </p>
        <p>
            <label for="harga">Harga: </label>
            <textarea name="harga"><?php echo $ukk_makanan['harga'] ?></textarea>
        </p>
        <p>
            <label for="stok">Stok : </label>
            <label><input type="text" name="stok" value="<?php echo $ukk_makanan['stok'] ?>"></label>
        </p>        
        <p>
            <label for="kategori">Kategori: </label>
            <input type="text" name="kategori" placeholder="kategori" value="<?php echo $ukk_makanan['kategori'] ?>" />
        </p>
        <p>
            <label for="deskripsi">deskripsi: </label>
            <input type="text" name="deskripsi" placeholder="deskripsi" value="<?php echo $ukk_makanan['deskripsi'] ?>" />
        </p>
        <p>
            <label for="kode_makanan">Kode Makanan </label>
            <input type="password" name="kode_makanan" placeholder="kode_makanan" value="<?php echo $ukk_makanan['kode_makanan'] ?>" />
        </p>
        <p>
        <button type="submit" value="Simpan" name="simpan">Simpan</button>
        </p>

        </fieldset>


    </form>

    <div class="input-group">
        <a href="list-siswa.php" class="btn">Tabel</a>
    </div>
    </body>
</html>