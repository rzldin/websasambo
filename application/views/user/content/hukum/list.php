<div class="container">
  <div class="container">
    <div class="kategori-container">
      <div class="sc1-kat">
        <h1>Hukum</h1>
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
                    <span class="author-name"><a href=""><?php echo $value->nama;?></a></span>
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
