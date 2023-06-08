<?php 

    include("login/config.php"); 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Growup CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- BOX Icons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- ICON -->
    <link rel="shortcut icon" href="assets/img/brand/favicon-bar.svg" type="image/x-icon">

    <!-- table -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- JS -->
    <script async src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script async src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script async src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Makanan</title>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- <img src="#" > -->
                <span>Yusuf Abdurrahman Aslam</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                </div>
                <a href="login/logout.php" class="btn btn-primary shadow-none">log out</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy" data-aos="fade-up" data-aos-duration="3000">  <!---buat transisi--->
                        <div class="text-label">
                            Khusus Bulan ini 
                        </div>
                        <div class="text-hero-bold">
                            Nasi Goreng Spesial
                        </div>
                        <div class="text-hero-regular">
                            Nasi goreng yang dibuat dengan cinta dan penuh kasih sayang 
                            Nasi goreng ini persis seperti masakan ibu sendiri
                        </div>
                        <div class="cta">
                            <a href="form-daftar.php" class="btn btn-primary shadow-none">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <img src="OIP.jpeg" class="w-100" alt="img">
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script>
        AOS.init();
    </script>


<!-- Tabel -->


<div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="display-4">Table</h1>
            <table id="table" class="table table-striped table-bordered">
        <thead>
        <tr>
                <th>No</th>
                <th>Nama makanan</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori Makanan</th>
                <th>Deskripsi</th>
                <th>Kode Makanan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM ukk_makanan";
            $query = mysqli_query($conn, $sql);
    
            while($ukk_makanan = mysqli_fetch_array($query)){
                echo "<tr>";
    
                echo "<td>".$ukk_makanan['id']."</td>";
                echo "<td>".$ukk_makanan['nama_makanan']."</td>";
                echo "<td>".$ukk_makanan['harga']."</td>";
                echo "<td>".$ukk_makanan['stok']."</td>";
                echo "<td>".$ukk_makanan['kategori']."</td>";
                echo "<td>".$ukk_makanan['deskripsi']."</td>";
                echo "<td>".$ukk_makanan['kode_makanan']."</td>";
    
                echo "<td>";
                echo "<a href='form-edit.php?id=".$ukk_makanan['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$ukk_makanan['id']."'>Hapus</a>";
                echo "</td>";
    
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
            </div>           
        </div>
    </div>
</body>

</html>