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

            <li class="nav__item">
              <a href="artikel.php" class="nav__link">
                <i class='bx bx-book-open'></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <i class='bx bx-moon change-theme' id="theme-button" ></i>
        </div>
      </nav>
      <!-- End navbar -->
    </header>


    <!-- =============== MAIN ================== -->
    <main class="main">
      <section class="article section mt-5" id="article">
        <?php
          if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $queryArtikel = mysqli_query($dbconnect,"SELECT * FROM artikel WHERE artikel_id='$id'");
              $dataArtikel = mysqli_fetch_array($queryArtikel);
          }
        ?>
        <div class="text-center">
          <h1 class="section__title"><?= $dataArtikel['artikel_judul'] ?></h1>
          <img src="img_Artikel/<?= $dataArtikel['artikel_gambar'] ?>" class="work__img img-fluid">
        </div>

        <!-- Project -->
        <div class="work__container container content mt-4">
          <p><?= $dataArtikel['artikel_isi'] ?></p>
          <span class="skills__level"><?= $dataArtikel['artikel_tanggal']; ?> | <?= ucwords($dataArtikel['artikel_penulis']); ?></span>

          <div>
            <?php
              // deteksi kesamaan ip
              $artikel_like_ip = $_SERVER['REMOTE_ADDR'];
              $dataArtikelLike= mysqli_query($dbconnect,"SELECT * FROM artikel_like WHERE artikel_id IN ('$id') AND artikel_like_ip LIKE '%".$artikel_like_ip."%'");
              $dataArtikelLikeNum = mysqli_num_rows($dataArtikelLike);

              // menampilkan jumlah likenya
                $dataArtikelLike2= mysqli_query($dbconnect,"SELECT * FROM artikel_like WHERE artikel_id IN ('$id')");
                $dataArtikelLikeNum2 = mysqli_num_rows($dataArtikelLike2);

              if($dataArtikelLikeNum == 0) {
                echo '
                  <a href="artikel_like_action.php?aksi=suka&artikel_id='.$dataArtikel['artikel_id'].'" class="btn button-sm mt-3">'.$dataArtikelLikeNum2.' <i class="bx bxs-heart"></i></a>
                ';
              }

              else { 
                echo '
                    <a class="btn button-sm mt-3" href="">
                      '.$dataArtikelLikeNum2.' <i class="bx bxs-heart"></i>
                    </a>
                ';
              }
            ?>

            <a href="artikel_edit.php?id=<?= $dataArtikel['artikel_id'] ?>" class="btn button-sm mt-3"><i class='bx bx-plus'></i>Edit artikel</a>

            <a href="artikel_hapus.php?id=<?= $dataArtikel['artikel_id'] ?>" class="btn button-sm mt-3"><i class='bx bxs-trash-alt'></i>Hapus artikel</a>
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