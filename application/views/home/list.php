 <div class="container">
      <section id="feature_news_section" class="thumbnail-main">
        <div class="row">

            <div class="col-md-7">
                    <div class="thumbnail-atas" style="background-image: url(assets/template/assets/img/feature-staticc1.jpg);">
                      <div class="overlay">
                        <div class="page-title">
                        <p>January 1, 2019</p>
                        <a href="<?php echo base_url() ?>" class="judul-samping1">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                        </div>
                    </div>
                  </div>
                     
                    <!-- feature_article_img -->
            </div>
            <!-- col-md-7 -->
            <div class="col-md-5">
                    <div class="thumbnail-samping" style="background-image: url(assets/template/assets/img/feature-staticc1.jpg);">
                      <div class="overlay-samping"></div>
                        <div class="page-title-samping1">
                        <p>January 1, 2019</p>
                        <a class="judul-samping1">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                        </div>
                    </div>
                    <!-- feature_article_img -->

                    <div class="thumbnail-samping" style="background-image: url(assets/template/assets/img/feature-staticc1.jpg);">
                      <div class="overlay-samping"></div>
                        <div class="page-title-samping">
                        <p>January 1, 2019</p>
                        <a class="judul-samping">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                        </div>
                    <!-- feature_article_img -->
                <!-- feature_static_wrapper -->
            </div>
            <!-- col-md-5 -->
        </div>
        <!-- Row -->
    </section>
    <!-- Feature News Section -->
    <div class="row sectionsatu">
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Pariwisata</a>
        </div>
        <?php 
        foreach ($berita_pariwisata as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
               <span class="">Oleh <a href=""><?php echo $value->nama; ?></a></span>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

        <?php if($key == 3) {
              break;
            }
          }
          } 
        ?>
      </div>

      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Ekonomi</a>
        </div>
        <?php 
        foreach ($berita_ekonomi as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

        <?php if($key == 3) {
              break;
            }
          }
          } 
        ?>
      </div>
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Teknologi</a>
        </div>
     <?php 
        foreach ($berita_teknologi as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href="" ><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

        <?php  if($key == 3) {
              break;
            }
            }
          } 
        ?>
      </div>
    
      </div>
    </div>

    <?php
      foreach ($iklan as $key => $value) {
    ?>
    <a target="_blank" href="<?php echo $value->link_iklan; ?>">
    <div class="iklan" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar) ?>);height: 250px; background-size: 100%">
      <!-- <p>space iklan</p> -->
    </div>
    </a>
    <?php } ?>
  


    <!-- section 2 -->


    <div class="row sectionsatu">
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Berita Hangat</a>
        </div>
        <?php foreach ($berita_hangat as $key => $value) {
          ?>
        <div class="thumbnail-hangat" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-hangat"></div>
            <div class="page-title-hangat">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-hangat" href=""><?php echo $value->judul_berita; ?></a>
              <br>
              <p>Oleh <a href=""><?php echo $value->nama; ?></a></p>
            </div>
         </div>
       <?php } ?>
        </div>
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Sosbud</a>
       </div>
        <?php 
        foreach ($berita_sosbud as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

        <?php if($key == 3) {
              break;
            }
            }
          } 
        ?>
      </div>
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Olahraga</a>
        </div>
        <?php 
        foreach ($berita_olahraga as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

         <?php if($key == 3) {
              break;
            }
            }
          } 
        ?>
    </div>
  </div>

    <?php
      foreach ($iklan as $key => $value) {
    ?>
    <a target="_blank" href="<?php echo $value->link_iklan; ?>">
    <div class="iklan" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar) ?>);height: 250px; background-size: 100%">
      <!-- <p>space iklan</p> -->
    </div>
    </a>
    <?php } ?>>

    
    <!-- section 3 -->


    <div class="row sectionsatu">
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Pendidikan</a>
        </div>
        <?php 
        foreach ($berita_pendidikan as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

         <?php if($key == 3) {
              break;
            }
            }
          } 
        ?>
      </div>
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Hukum</a>
        </div>
        <?php 
        foreach ($berita_hukum as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

         <?php if($key == 3) {
              break;
            }
            }
          } 
        ?>
      </div>
      <div class="col-md-4 sc1">
        <div class="kategori-label">
          <a>Politik</a>
        </div>
        <?php 
        foreach ($berita_politik as $key => $value) { 
          if($key == 0) {
        ?>
        <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>);">
          <div class="overlay-kategori-utama"></div>
            <div class="page-title-kategori-utama">
              <p><?php echo $value->tanggal_post; ?></p>
              <a class="judul-kategori-utama" href=""><?php echo $value->judul_berita; ?></a>
            </div>
         </div>
        <?php } else { ?>

    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
          </div>
    </div>

         <?php if($key == 3) {
              break;
            }
            }
          } 
        ?>
    </div>

    </div>