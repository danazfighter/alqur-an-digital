<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c99d96031e.js" crossorigin="anonymous"></script>

    <!-- Animation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style type="text/css">
        .jumbotron{
            background-image: url('masjid.jpg');
            background-size: cover;
            background-attachment: fixed;
            height: 537px;
            color: white;
        }
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
        $link = file_get_contents('https://equran.id/api/v2/surat');
        $data = json_decode($link, true);
        ?>

        <!-- https://quran-api-id.vercel.app/surahs -->
        <!-- https://quran-api-id.vercel.app/surahs/1 -->
        <!-- https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json -->
        <!-- https://raw.githubusercontent.com/penggguna/QuranJSON/master/surah/1.json -->
        <!-- https://equran.id/api/v2/surat -->

    <title>Al - Qur'an Digital</title>
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
          <a class="nav-link active home text-white" href="#home"><i class="fas fa-home"> Home</i></a>
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

    <div class="jumbotron jumbotron-fluid mt-1" style="border-radius: 20px;">
        <div class="container text-center"><br><br><br>
      <h1 class="display-4 font-weight-bold pt-5 pb-3">Al-Qur'an Digital</h1>
      <br>
      <h5 class="font-weight-bold">Bacalah walaupun hanya satu ayat</h5>
      </div>
    </div>
    </div>
    
    <div class="container">
        <div class="alert alert-info text-center"><marquee width="80%">SELAMAT DATANG DI WEBSITE KAMI ^_^ 
        YUKK NGAJI..</marquee></div>

        <div class="row mt-4 mb-4">
            <?php foreach ($data['data'] as $row) : ?>
            <div class="col-sm-4">
               <div class="thumbnail text-white">
                    <div class="card animate__animated animate__rotateInDownLeft" style="height: 200px; border-radius: 20px; background-image: url('onta.jpg');">
                        <div class="card-body">
                            <b><?= $row['nomor']; ?>. <a href="
                            surah.php?nomor=<?= $row['nomor']; ?>" style="color: #FFFFFF;"><?= $row['namaLatin']; ?></a></b><br><br>
                            <div class="row">
                                <div class="col-sm-6"><b><?= $row['nama']; ?></b></div>
                                <div class="col-sm-6"><b><?= $row['arti']; ?></b></div>
                            </div><br>
                            <audio controls="" class="pb-3">
                                <source src="<?= $row['audioFull']['05']; ?>" type=""></audio>
                        </div>
                   </div>
                   <br><br>
               </div>
            </div>
            <?php endforeach; ?>
        </div>          
    </div>

    <div class="container-fluid pb-3">
        <footer id="about" style="background: linear-gradient(to top, #0f0c29, #302b63, #24243e); border-radius: 20px;">
        <div class="container-fluid text-center text-white pt-4 pb-4">
            <h5 class="pt-2 pb-4"><i class="far fa-user"> Created By:</i></h5 class="pt-2 pb-3">
            <div class="row">
                <div class="col-6 text-right">
                    <img src="mbok.png" class="rounded-circle img-thumbnail" style="width: 140px">
                </div>
                <div class="col-6 text-left">
                    <p class="text-white">
                    <br><br><i class="fab fa-facebook"> Dana ZFighter | 2024</i></p>
                </div>
            </div>
        </div>
    </footer>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>