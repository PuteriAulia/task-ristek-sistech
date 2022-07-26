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

    <!-- ==================== ICON ==================== -->
    <link rel="shortcut icon" type="text/css" href="assets/img/favicon.png">

    <!-- ==================== BOXICON ==================== -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Portofolio | Puteri Aulia Fahlia</title>
  </head>
  <body>
    <!-- ==================== HEADER ==================== -->
    <?php include("header.php"); ?>

    <!-- =============== MAIN ================== -->
    <main class="main">
      <!-- =============== HOME ================== -->
      <?php include("home.php"); ?>

      <!-- =============== ABOUT ================== -->
      <?php include("about.php"); ?>

      <!-- =============== SKILL ================== -->
      <?php include("skill.php"); ?>

      <!-- =============== WORK ================== -->
      <?php include("work.php"); ?>

      <!-- =============== ARTIKEL ================== -->
      <?php include("artikel_new.php"); ?>

      <!-- =============== CONTACT ================== -->
      <?php include("contact.php"); ?>
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