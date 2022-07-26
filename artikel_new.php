      <section class="work section" id="article">
        <div class="text-center mt-5">
          <span class="section__subtitle">Blog</span>
          <h2 class="section__title">Artikel Terbaru</h2>
        </div>

        <!-- Project -->
        <div class="work__container container content">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
              include("config.php");

              $queryArtikel = mysqli_query($dbconnect,"SELECT * FROM artikel ORDER BY artikel_id DESC LIMIT 3");
              while ($dataArtikel = mysqli_fetch_array($queryArtikel)) {
            ?>
              <div class="col">
                <div class="work__card mix web">
                  <img src="img_Artikel/<?= $dataArtikel['artikel_gambar']; ?>" class="work__img img-fluid">
                  <h3 class="work__title"><?= $dataArtikel['artikel_judul']; ?></h3>
                  <span class="skills__level"><?= substr($dataArtikel['artikel_isi'],0,300); ?></span>
                  <a href="artikel_detail.php?id=<?= $dataArtikel['artikel_id']; ?>" class="work__button mt-3">
                    Detail
                    <i class='bx bx-right-arrow-alt work__icon'></i>
                  </a>
                </div>
              </div>
            <?php
              }
            ?>
          </div>

          <a href="artikel.php" class="btn button__more_article button mt-4">Lihat lebih banyak artikel</a>
        </div>
        <!-- End Project -->
      </section>