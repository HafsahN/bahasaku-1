<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

  <link rel="stylesheet" href="style.css">

  <title>Bahasaku</title>
</head>

<body>
  <!-- navigasi -->
  <nav class="navbar navbar-expand-sm fixed-top pb-3 text-center bg">
    <!-- kontainer -->
    <div class="container">
      <!-- brand -->
      <a href="#">
        <img src="img/logo.png" alt="" class="pr-5">
      </a>

      <!-- link konten -->
      <!-- SD -->
      <ul class="nav navbar-nav pl-5">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SD</a>
          <div class="dropdown-menu pl-4">
            <a href="#" class="list-item">Kelas 1</a><br>
            <a href="#" class="list-item">Kelas 2</a><br>
            <a href="#" class="list-item">Kelas 3</a><br>
            <a href="#" class="list-item">Kelas 4</a><br>
            <a href="#" class="list-item">Kelas 5</a><br>
            <a href="#" class="list-item">Kelas 6</a>
          </div>
        </li>

        <li class="nav-item dropdown pl-5">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SMP</a>
          <div class="dropdown-menu pl-4">
            <a href="#" class="list-item">Kelas 7</a><br>
            <a href="#" class="list-item">Kelas 8</a><br>
            <a href="#" class="list-item">Kelas 9</a><br>
          </div>
        </li>

        <li class="nav-item dropdown pl-5">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SD</a>
          <div class="dropdown-menu pl-4">
            <a href="#" class="list-item">Kelas 10</a><br>
            <a href="#" class="list-item">Kelas 11</a><br>
            <a href="#" class="list-item">Kelas 12</a><br>
          </div>
        </li>

        <li class="nav-item pl-5">
          <a href="#" class="nav-link">Forum</a>
        </li>
      </ul>

      <!-- Login -->
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/login'); ?>"><span class="fas fa-sign-in-alt pr-2"></span> Login</a>
        </li>
      </ul>
    </div> <!-- akhir kontainer -->
  </nav>

  <!-- carousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/belajar.jpg" alt="slide pertama" width="100%">
        <div class="carousel-caption">
          <h5>Perkembangan E-Learning di Indonesia</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolore alias reprehenderit pariatur facilis quos, sit soluta quibusdam nemo a quasi, odio, dolorem magni maiores saepe distinctio officiis voluptas. Officia.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/belajar.jpg" alt="slide kedua" width="100%">
      </div>
      <div class="carousel-item">
        <img src="img/belajar.jpg" alt="slide ketiga" width="100%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br><br><br><br>

  <div class="container">

    <!-- testimoni -->
    <h2 class="text-center"><strong>Testimoni</strong></h2>
    <hr class="hr-about">
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="img-thumbnail">
          <img src="img/profile.jpg" alt="" class="img-fluid rounded-circle ml-5 mt-3" width="250">
          <div class="caption">
            <h3 class="text-center mt-3">Rozakul Barkhi</h3>
            <p class="text-center">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, perferendis inventore dolorem rerum et tempora sint nemo illum ab saepe, assumenda, amet illo deleniti officiis, voluptatem maxime atque vero sunt."</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="img-thumbnail">
          <img src="img/profile.jpg" alt="" class="img-fluid rounded-circle ml-5 mt-3" width="250">
          <div class="caption">
            <h3 class="text-center mt-3">Rozakul Barkhi</h3>
            <p class="text-center">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, perferendis inventore dolorem rerum et tempora sint nemo illum ab saepe, assumenda, amet illo deleniti officiis, voluptatem maxime atque vero sunt."</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="img-thumbnail">
          <img src="img/profile.jpg" alt="" class="img-fluid rounded-circle ml-5 mt-3" width="250">
          <div class="caption">
            <h3 class="text-center mt-3">Rozakul Barkhi</h3>
            <p class="text-center">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, perferendis inventore dolorem rerum et tempora sint nemo illum ab saepe, assumenda, amet illo deleniti officiis, voluptatem maxime atque vero sunt."</p>
          </div>
        </div>
      </div>
    </div><br><br><br>

    <h2 class="text-center"><strong>Kenapa harus memilih kami?</strong></h2>
    <hr class="hr-fitur">

    <div class="row">
      <div class="col-md-6">
        <img src="img/gratis.jpg" alt="">
      </div>

      <div class="col-md-6">
        <h4 class="pt-5 pr-5"><strong>Gratis</strong></h4>
        <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure ullam, id ea numquam, soluta!</p>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-6">
        <h4 class="pt-5 pl-5"><strong>Gratis</strong></h4>
        <p class="pl-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure ullam, id ea numquam, soluta!</p>
      </div>

      <div class="col-md-6">
        <img src="img/gratis.jpg" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="img/gratis.jpg" alt="">
      </div>

      <div class="col-md-6">
        <h4 class="pt-5 pr-5"><strong>Gratis</strong></h4>
        <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ducimus quam illum similique cumque ratione cupiditate dolorem voluptate pariatur hic, rerum, et tempora earum iure ullam, id ea numquam, soluta!</p>
      </div>
    </div>
  </div> <!-- akhir kontainer -->
  <br><br>

  <!-- footer -->
  <footer class="page-footer bg">
    <div class="container">
      <!-- logo -->
      <div class="row">
        <div class="col-md-4 pt-5">
          <a href="#"><img src="img/logo.png" alt=""></a><br><br>
          <a href="#" class="list-footer">Beranda -</a>
          <a href="#" class="list-footer">Forum -</a>
          <a href="#" class="list-footer">Testimoni -</a>
          <a href="#" class="list-footer">Kontak</a><br>
          <p class="list-footer"> Bahasaku &copy; 2019</p>
        </div>

        <div class="col-md-4 pt-5">
          <p class="list-footer"><i class="fas fa-map-marker-alt pr-3"></i>Gedung D5 Ilmu Komputer UNNES</p>
          <p class="list-footer"><i class="fas fa-mobile-alt pr-3"></i> 082 334 673 247</p>
          <p class="list-footer"><i class="fas fa-envelope pr-3"></i>team.bahasaku@gmail.com</p>
        </div>

        <div class="col-md-4 pt-5">
          <h5 class="list-footer">Tentang Bahasaku</h5>
          <p class="list-footer">Bahasaku adalah sebuah media pembelajaran berbasis web yang menyediakan berbagai materi sesuai dengan kurikulum yang terbaru. </p>
          <p class="list-footer"><i class="fab fa-facebook-f pr-4"></i><i class="fab fa-instagram pr-4"></i>
            <i class="fab fa-twitter pr-4"></i><i class="fab fa-youtube"></i></p>
        </div>

      </div>

    </div> <!-- akhir container -->
    <br>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>