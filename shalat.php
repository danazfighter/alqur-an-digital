<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c99d96031e.js" crossorigin="anonymous"></script>

    <!-- Animation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style type="text/css">
        .home:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
        .asmaul:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
        .niat:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
        .baca:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
        .kursi:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
        .doa:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
        .shalat:hover{
            background-color: #E7664A;
            color: white !important;
            border-radius: 30px;
        }
    </style>

        <?php
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date('Y-m-d');
        $link = file_get_contents("https://api.myquran.com/v2/sholat/jadwal/1301/$waktu");
        $data = json_decode($link, true);
        ?>

<!-- https://gist.github.com/mininxd/76aa7a922b596a1cd45c6f950ad0f483 -->

    <title>List Kota</title>
  </head>
  <body id="home" style="background: linear-gradient(to bottom, #000428, #004e92);">

    <div class="container-fluid pt-3 pb-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 pb-3" style="border-radius: 20px; background: linear-gradient(to right, #654ea3, #eaafc8);">
        <div class="container">
      <a class="navbar-brand text-white" href="index.php"><i class="fas fa-quran"> Al - Qur'an Digital</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active home text-white" href="index.php"><i class="fas fa-home"> Home</i></a>
          <a class="nav-link active asmaul text-white" href="asmaulhusna.php"><i class="fas fa-atlas"> Asmaul Husna</i></a>
          <a class="nav-link active niat text-white" href="niatshalat.php"><i class="fas fa-book-open"> Niat Shalat</i></a>
          <a class="nav-link active baca text-white" href="bacaanshalat.php"><i class="fas fa-columns"> Bacaan Shalat</i></a>
          <a class="nav-link active kursi text-white" href="ayatkursi.php"><i class="fas fa-receipt"> Ayat Kursi</i></a>
          <a class="nav-link active doa text-white" href="doa.php"><i class="fas fa-pray"> Doa Doa</i></a>
          <a class="nav-link active shalat text-white" href="shalat.php"><i class="fas fa-clock"> Jadwal Shalat</i></a>
        </div>
      </div>
      </div>
    </nav>
    </div>
    
    <div class="container mb-3">

        <div class="alert alert-info text-center mt-4 mb-4"><marquee width="80%">SELAMAT DATANG DI WEBSITE KAMI ^_^ 
        YUKK NGAJI..</marquee>
        </div>

        <form class="form-inline my-2 my-lg-0 ml-2" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Nama Kota" name="kota" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" class="submitnya">Search</button>
            </form>

        <div class="row pt-3 isinya">
            <div class="col-sm-4">
               <div class="thumbnail">
                    <div class="card animate__animated animate__rotateInDownLeft bg-success text-white" style="border-radius: 20px;">
                        <div class="card-body font-weight-bold">
                            <p><?= $data['data']['lokasi']; ?></p>
                            <p><?= $data['data']['daerah']; ?></p>
                            <p><?= $data['data']['jadwal']['tanggal']; ?></p>
                            <hr>
                            <p>IMSAK: <?= $data['data']['jadwal']['imsak']; ?></p>
                            <p>SUBUH: <?= $data['data']['jadwal']['subuh']; ?></p>
                            <p>DHUHA: <?= $data['data']['jadwal']['dhuha']; ?></p>
                            <p>DZUHUR: <?= $data['data']['jadwal']['dzuhur']; ?></p>
                            <p>ASHAR: <?= $data['data']['jadwal']['ashar']; ?></p>
                            <p>MAGHRIB: <?= $data['data']['jadwal']['maghrib']; ?></p>
                            <p>ISYA: <?= $data['data']['jadwal']['isya']; ?></p>
                        </div>
                   </div>
               </div>
            </div>
        </div>
        
    </div>

    <!-- <div class="container-fluid pb-3">
        <footer id="about" style="background: linear-gradient(to top, #0f0c29, #302b63, #24243e); border-radius: 20px;">
        <div class="container-fluid text-center text-white pt-4 pb-4">
            <h5 class="pt-2 pb-4"><i class="far fa-user"> Created By :</i></h5 class="font-weight-bold pt-2 pb-3">
            <div class="row">
                <div class="col-6 text-right">
                    <img src="mbok.png" class="rounded-circle img-thumbnail" style="width: 140px">
                </div>
                <div class="col-6 text-left">
                    <p class="text-white">
                    <br><br><i class="fab fa-facebook"> Claus Von Stauffenberg | 2021</i></p>
                </div>
            </div>
        </div>
    </footer>
    </div> -->

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script>
            $(document).ready(function () {
                <?php if (isset($_GET['kota'])) { ?>
                $('.isinya').html(`

                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $kota = $_GET['kota'];
                    $link = file_get_contents("https://api.myquran.com/v2/sholat/kota/cari/$kota");
                    $data = json_decode($link, true);
                    ?>
                    
                    <div class="col-sm-4">
                    <?php foreach ($data['data'] as $row) : ?>
                    <div class="thumbnail">
                    <div class="card animate__animated animate__rotateInDownLeft bg-success text-white mt-2" style="border-radius: 20px;">
                        <div class="card-body text-white font-weight-bold">
                            <a href="kota.php?kota=<?= $row['id']; ?>"style="color: white;"><p><?= $row['lokasi']; ?></p></a>
                        </div>
                   </div>
                   </div>
                   <?php endforeach; ?>
                   </div>
                    
            `);
<?php } ?>
});
    
        </script>


  </body>
</html>