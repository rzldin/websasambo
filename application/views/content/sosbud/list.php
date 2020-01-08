<body>
    <!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('home') ?>">Sasambo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
              <li><a href="<?php echo base_url('content/kategori/pariwisata') ?>">Pariwisata</a></li>
              <li><a href="<?php echo base_url('content/kategori/ekonomi') ?>">Ekonomi</a></li>
              <li><a href="<?php echo base_url('content/kategori/teknologi') ?>">Teknologi</a></li>
              <li><a href="<?php echo base_url('content/kategori/olahraga') ?>">Olahraga</a></li>
              <li><a href="<?php echo base_url('content/kategori/pariwisata') ?>">Pariwisata</a></li>
              <li><a href="<?php echo base_url('content/kategori/politik') ?>">Politik</a></li>
              <li class="active"><a href="sosbud.html">Sosbud<span class="sr-only">(current)</span></a></li>
              <li><a href="<?php echo base_url('content/kategori/hukum') ?>">Hukum</a></li>
              <li><a class="masuk" href="<?php echo base_url('userlogin') ?>">Daftar/Masuk</a></li>              
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="container">

    <div class="kategori-container">

      <div class="sc1-kat">
        <h1>Sosbud</h1>
      </div>

      <div class="sc2-kat">
        <h2>Artikel Terbaru</h2>

        <div class="row sc2-kat-row">
          <?php foreach ($berita as $key => $value) { ?>
          <div class="col-md-4" id="sc1-pariwisata">
            <div class="thumbnail-kategori-par" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>">
              <div class="overlay-kategori-par"></div>
            </div>
            <div class="garis-merah"></div>
                <div class="page-title-kategori">
                  <span class="author-name"><a href=""><?php echo $value->nama; ?></a></span>
                  &nbsp;|&nbsp;
                  <span class="upload-time"><a href=""><?php echo $value->tanggal_post; ?></a></span> <br>
                  <a href="<?php echo base_url('home/read/'.$value->slug_berita); ?>" class="judul-kategori"><?php echo $value->judul_berita; ?></a>
                </div>
              </div>
          <?php
            if($key == 2) {
              break;
            }
            } 
           ?>

        </div>

        <h5>
          <a href="" class="rm-button-kat">Lihat lebih banyak</a>
        </h5>

    </div>
        
        <div class="sc3-kat">
          
          <div class="row sc3-kat-row">
            <div class="col-md-2"></div>
            <div class="col-md-8 sc3-kat-row-1">
              <h3>Paling Populer</h3>
              <div class="thumbnail-sc3-kat" style="background-image: url(<?php echo base_url('assets/template/assets/img/thumbnail-kategori.jpg');?>"></div>
                <div class="judul-thumbnail-sc3-kat">
                  <div class="garis-merah"></div>
                  <span class="author-name"><a href="">Habibullah</a></span>
                  &nbsp;|&nbsp;
                  <span class="upload-time"><a href="">32 Menit yang lalu</a></span>
                  <div class="judul-thumbnail-text">
                    <h3><a href="">Selamat! Sumbawa Memenangkan Eco-Tourism Award 2018!</a></h3>
                  </div>
                </div>

                <div class="row list-populer">
                  <div class="col-md-6 Populer-kiri">
                    <div class="media">
                      <div class="media-left">
                        <a href="#"><img class="media-object-populer" src="<?php echo base_url(); ?>assets/template/assets/img/first.png" alt="Generic placeholder image"></a>
                      </div>
                    <div class="media-body">
                      <div class="page-title-kategori">
                        <span class="author-name"><a href="">Habibullah</a></span>
                        &nbsp;|&nbsp;
                        <span class="upload-time"><a href="">32 Menit yang lalu</a></span> <br>
                        <a href="" class="judul-kategori">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                      </div>
                    </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#"><img class="media-object-populer" src="<?php echo base_url(); ?>assets/template/assets/img/second.png" alt="Generic placeholder image"></a>
                      </div>
                    <div class="media-body">
                      <div class="page-title-kategori">
                        <span class="author-name"><a href="">Habibullah</a></span>
                        &nbsp;|&nbsp;
                        <span class="upload-time"><a href="">32 Menit yang lalu</a></span> <br>
                        <a href="" class="judul-kategori">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                      </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6 Populer-kanan">
                    <div class="media">
                      <div class="media-left">
                        <a href="#"><img class="media-object-populer" src="<?php echo base_url(); ?>assets/template/assets/img/third.png" alt="Generic placeholder image"></a>
                      </div>
                    <div class="media-body">
                      <div class="page-title-kategori">
                        <span class="author-name"><a href="">Habibullah</a></span>
                        &nbsp;|&nbsp;
                        <span class="upload-time"><a href="">32 Menit yang lalu</a></span> <br>
                        <a href="" class="judul-kategori">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                      </div>
                    </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#"><img class="media-object-populer" src="<?php echo base_url(); ?>assets/template/assets/img/fourth.png" alt="Generic placeholder image"></a>
                      </div>
                    <div class="media-body">
                      <div class="page-title-kategori">
                        <span class="author-name"><a href="">Habibullah</a></span>
                        &nbsp;|&nbsp;
                        <span class="upload-time"><a href="">32 Menit yang lalu</a></span> <br>
                        <a href="" class="judul-kategori">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>

        </div>

        <div class="iklan">space iklan</div>

    </div>

    <!--kategori-container-->
    </div>
    <!--container-->
    </div>

    </div>

    <div class="sasambo-footer">
      <a>
        Sasambo
      </a>
      <p>2018 sasambo.com. Allright Reserved</p>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>