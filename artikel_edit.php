<?php
  include("config.php");

  if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $penulis = $_POST['penulis'];
    $isi = $_POST['isi'];
    $views = 0;

      $namaFile = $_FILES['gambar']['name'];
      $ukuranFile = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      $tmpName = $_FILES['gambar']['tmp_name'];

      $daftarEkstensiGambar = ['jpg', 'jpeg','png'];
      $ekstensiGambar = explode('.', $namaFile);
      $ekstensiGambar = strtolower(end($ekstensiGambar));

      if (!in_array($ekstensiGambar, $daftarEkstensiGambar)) {
        echo"
          <script>
            alert('Upload gambar dengan benar');
          </script>
        ";
      }

      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ekstensiGambar; 

      move_uploaded_file($tmpName, 'img_Artikel/'.$namaFileBaru);

      $gambar = $namaFileBaru;

    mysqli_query($dbconnect,"UPDATE artikel SET artikel_judul='$judul', artikel_isi='$isi', artikel_gambar='$gambar', artikel_tanggal='$tanggal', artikel_penulis='$penulis' WHERE artikel_id = '$id'");
    header("location:artikel.php");
  }
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

    <!-- ==================== SUMMERNOTE ==================== -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

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
      </nav>
      <!-- End navbar -->
    </header>


    <!-- =============== MAIN ================== -->
    <main class="main">
      <section class="article section mt-5" id="article">
        <div class="text-center">
          <h1 class="section__title">Edit Artikel</h1>
        </div>

        <!-- Project -->
        <div class="work__container container content">
          <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $queryArtikel = mysqli_query($dbconnect, "SELECT * FROM artikel WHERE artikel_id = '$id'");
                $dataArtikel = mysqli_fetch_assoc($queryArtikel);
            }
          ?>
          <form method="POST" action="" class="contact_form" enctype="multipart/form-data">
            <div class="row">
              <input type="hidden" class="contact__form-input" name="id" value="<?= $dataArtikel['artikel_id'] ?>">

              <div class="col-lg-6 col-sm-12">
                <div class="col contact__form-div">
                  <label for="" class="contact__form-tag">Judul Artikel</label>
                  <input type="text" class="contact__form-input" name="judul" value="<?= $dataArtikel['artikel_judul'] ?>">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="col contact__form-div">
                  <label for="" class="contact__form-tag">Gambar</label>
                  <input type="file" class="contact__form-input" name="gambar" value="<?= $dataArtikel['artikel_gambar'] ?>" required>
                </div>
              </div>
            </div>

            <div class="col contact__form-div">
              <label for="" class="contact__form-tag">Tanggal</label>
              <input type="date" class="contact__form-input" name="tanggal" value="<?= $dataArtikel['artikel_tanggal'] ?>">
            </div>

            <div class="col contact__form-div">
              <label for="" class="contact__form-tag">Penulis</label>
              <input type="text" class="contact__form-input" name="penulis" value="<?= $dataArtikel['artikel_penulis'] ?>">
            </div>

            <textarea class="contact__form-div" id="summernote" name="isi"><?= $dataArtikel['artikel_isi'] ?></textarea>

            
            <button class="button mt-5" name="edit">Edit artikel</button>
          </form>
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

    <script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 500
      });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>