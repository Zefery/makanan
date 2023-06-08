<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <header>
        <h1>Formulir Pendaftaran Siswa Baru</h1>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama Makanan </label>
            <input type="text" name="nama_makanan" placeholder="Nama Makanan" />
        </p>
        <p>
            <label for="harga">Harga </label>
            <input type="text" name="harga">
        </p>
        <p>
            <label for="stok">Stok </label>
            <label><input type="text" name="stok" ></label>
        </p>       
        <p>
            <label for="kategori">kategori </label>
            <input type="text" name="kategori" placeholder="kategori" />
        </p>
        <p>
            <label for="deskripsi">Deskripsi </label>
            <input type="text" name="deskripsi" placeholder="deskripsi" />
        </p>
        <p>
            <label for="kode_makanan">Kode Makanan </label>
            <input type="password" name="kode_makanan" placeholder="kode_makanan" />
        </p>
        <p>
            <button type="submit" value="Daftar" name="daftar">Daftar</button>
            <button class="tombol"><a href="home-page.php" class="tombol" style="text-decoration:none">Halaman Utama</a></button>       
        </p>
           
        </fieldset>
        
    </form>
            
    </body>
</html>
