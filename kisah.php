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

    <style type="text/css">
        .home:hover{
            background-color: #4D76EC;
            color: white !important;
            border-radius: 30px;
        }
        .api:hover{
            background-color: #4D76EC;
            color: white !important;
            border-radius: 30px;
        }
        .about:hover{
            background-color: #4D76EC;
            color: white !important;
            border-radius: 30px;
        }
    </style>

    <title>Kisah 25 Nabi</title>
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fas fa-quran"> Al - Qur'an Digital</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active home" href="index.php"><i class="fas fa-home"> Home</i></a>
          <a class="nav-link active api" href="https://al-quran-8d642.firebaseio.com/data.json?print=pretty">
            <i class="fas fa-terminal"> API Developer</i></a>
          <a class="nav-link active about" href="#about"><i class="fas fa-users-cog"> About</i></a>
        </div>
      </div>
      </div>
    </nav>

    
    <div class="container mb-3">

        <div class="alert alert-info text-center mt-4 mb-4"><marquee width="80%">SELAMAT DATANG DI WEBSITE KAMI ^_^ 
        YUKK NGAJI..</marquee></div>

        <div class="row mt-4 mb-4">

            <?php 
            $link = file_get_contents("https://islamic-api-zhirrr.vercel.app/api/kisahnabi");
            $data = json_decode($link, true);
            ?>

            <?php $i=1; ?>
            <?php foreach ($data as $kisah) : ?>
            <div class="col-sm-4">
               <div class="thumbnail">
                    <div class="card" style="height: 200px;">
                        <div class="card-body">
                            <b><?= $i; ?>. Kisah Nabi: <a href="
                            kisahnabi.php?name=<?= $kisah['name']; ?>"><?= $kisah['name']; ?></a></b><br><br>
                            <div class="row">
                                <div class="col-12"><b>Tahun Kelahiran: <?= $kisah['thn_kelahiran']; ?></b></div>
                             </div>
                             <div class="row">  
                                <div class="col-sm-6"><b>Usia : <?= $kisah['usia']; ?></b></div>
                            </div>
                        </div>
                   </div>
                   <br><br>
               </div>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div> 

    </div>


    <footer id="about">
        <div class="container-fluid bg-dark text-center text-white pt-4 pb-4">
            <h5 class="pt-2 pb-4"><i class="fas fa-user-tie"> Created By :</i></h5 class="font-weight-bold pt-2 pb-3">
            <div class="row">
                <div class="col-6 text-right">
                    <img src="kiw.jpg" class="rounded-circle img-thumbnail" style="width: 135px">
                </div>
                <div class="col-6 text-left">
                    <p class="text-white">
                    <br><br><i class="fab fa-facebook"> Claus Von Stauffenberg | 2021</i></p>
                </div>
            </div>
        </div>
    </footer>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>