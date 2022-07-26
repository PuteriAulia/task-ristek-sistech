<?php
  include("config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ==================== MY STYLE ==================== -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- ==================== BOXICON ==================== -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Portofolio | Puteri Aulia Fahlia</title>
  </head>
  <body>
    <!-- ==================== HEADER ==================== -->
    <header class="header" id="header">
      <!-- Start navbar -->
      <nav class="container d-flex justify-content-between mt-4">
        <a href="index.php" class="nav__logo">Puteri</a>

        <div class="nav__menu position-fixed bottom-0 start-50 translate-middle-x">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php" class="nav__link active-link">
                <i class='bx bx-home-alt'></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <div>
          <a href="artikel_tambah.php" class="btn button-sm" style="margin-right: 20px;"><i class='bx bx-plus'></i>Tambah artikel</a>
          <i class='bx bx-moon change-theme' id="theme-button" ></i>
        </div>
      </nav>
      <!-- End navbar -->
    </header>


    <!-- =============== MAIN ================== -->
    <main class="main">
      <section class="article section mt-5" id="article">
        <div class="text-center">
          <h2 class="section__title">Blog Artikel</h2>
        </div>

        <!-- Project -->
        <div class="work__container container content">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card -->
              <?php
                $queryArtikel = mysqli_query($dbconnect,"SELECT * FROM artikel ORDER BY artikel_id DESC");
                
                while ($dataArtikel = mysqli_fetch_array($queryArtikel)) {
              ?>
                <div class="col">
                  <div class="work__card mix web">
                    <img src="img_Artikel/<?= $dataArtikel['artikel_gambar'] ?>" class="work__img img-fluid">
                    <h3 class="work__title"><?= $dataArtikel['artikel_judul']; ?></h3>
                    <span class="skills__level"><?= substr($dataArtikel['artikel_isi'],0,300); ?></span>
                    <a href="artikel_detail.php?id=<?= $dataArtikel['artikel_id']; ?>" class="work__button mt-3">
                      Selengkapnya
                      <i class='bx bx-right-arrow-alt work__icon'></i>
                    </a>
                  </div>
                </div>
              <?php
                }
              ?>
          </div>
        </div>
        <!-- End Project -->
      </section>
    </main>


    <!-- =============== Footer ================ -->
    <footer class="footer">
      <div class="footer__container container">
        <!-- Copyright -->
        <span class="footer__copy p-3">
          &#169; PuteriAulia. All rights reserved
        </span>
      </div>
    </footer>


    <!-- =============== Mixitup Filter ================ -->
    <script src="assets/js/mixitup.min.js"></script>

    <!-- =============== Main JS ================ -->
    <script src="assets/js/main.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>