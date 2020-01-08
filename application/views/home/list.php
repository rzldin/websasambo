<div class="container">
  <section id="feature_news_section" class="thumbnail-main">
    <div class="row">
      <div class="col-md-7">
        <div class="thumbnail-atas" style="background-image: url(assets/template/assets/img/feature-staticc1.jpg);">
          <div class="overlay">
            <div class="page-title">
            <p>January 1, 2019</p>
            <a href="<?php echo base_url ('') ?>" class="judul-samping1">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-5">
        <div class="thumbnail-samping" style="background-image: url(assets/template/assets/img/feature-staticc1.jpg);">
          <div class="overlay-samping"></div>
            <div class="page-title-samping1">
            <p>January 1, 2019</p>
            <a class="judul-samping1">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
            </div>
        </div>

        <div class="thumbnail-samping" style="background-image: url(assets/template/assets/img/feature-staticc1.jpg);">
          <div class="overlay-samping"></div>
            <div class="page-title-samping">
            <p>January 1, 2019</p>
            <a class="judul-samping">Valentino Rossi, Kuasai Sirkuit Valencia 2018</a>
            </div>
        </div>
       </div>
  </section>


  <!-- BERITA PARIWISATA -->
<div class="row sectionsatu">
  <div class="col-md-4 sc1">
    <div class="kategori-label">
      <a>Pariwisata</a>
    </div>
    <?php 
    foreach ($berita_pariwisata as $key => $value) { 
      if($key == 0) {
    ?>
    <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
      <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color:white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita) ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
      </div>
</div>

    <?php if($key == 3) {
          break;
        }
      }
      } 
    ?>
  </div>

  <!-- BERITA EKONOMI -->

  <div class="col-md-4 sc1">
    <div class="kategori-label">
      <a>Ekonomi</a>
    </div>
    <?php 
    foreach ($berita_ekonomi as $key => $value) { 
      if($key == 0) {
    ?>
    <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
      <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita); ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
      </div>
</div>

    <?php if($key == 3) {
          break;
        }
      }
      } 
    ?>
  </div>

  <!-- BERITA TEKNOLOGI -->
  <div class="col-md-4 sc1">
    <div class="kategori-label">
      <a>Teknologi</a>
    </div>
 <?php 
    foreach ($berita_teknologi as $key => $value) { 
      if($key == 0) {
    ?>
    <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
     <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita); ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
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

<!-- Iklan -->

<?php
  foreach ($iklan as $key => $value) {
    if ($key == 1) {
      break;
    }
?>
<a target="_blank" href="<?php echo $value->link_iklan; ?>">
<div class="iklan" style="background-image:/* url(<?php echo base_url('assets/upload/image/'.$value->gambar) ?>);*/ background-size: 100%">
  <p>space iklan</p>

</a>
<?php } ?>
</div>



<!-- BERITA HANGAT -->


<div class="row sectionsatu">
  <div class="col-md-4 sc1">
    <div class="kategori-label">
      <a>Berita Hangat</a>
    </div>
    <?php foreach ($berita_hangat as $key => $value) {
      ?>
    <div class="thumbnail-hangat" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
      <div class="overlay-hangat"></div>
        <div class="page-title-hangat">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-hangat" href="<?php echo base_url('home/read/'.$value->slug_berita); ?>"><?php echo $value->judul_berita; ?></a>
          <br>
          <p>Oleh <a href=""><b><?php echo $value->nama; ?></b></a></p>
        </div>
     </div>
   <?php } ?>
    </div>

  <!-- BERITA SOSBUD -->
  <div class="col-md-4 sc1">
    <div class="kategori-label">
      <a>Sosbud</a>
   </div>
    <?php 
    foreach ($berita_sosbud as $key => $value) { 
      if($key == 0) {
    ?>
    <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
     <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita); ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
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
    <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
     <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita) ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
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

<!-- Iklan -->
<?php
  foreach ($iklan as $key => $value) {
?>
<a target="_blank" href="<?php echo $value->link_iklan; ?>">
<div class="iklan" style="background-image: /*url(<?php echo base_url('assets/upload/image/'.$value->gambar) ?>);*/height: 250px; background-size: 100%">
  <p>space iklan</p>
<?php if ($key == 0){
  break;
}} ?>
</a>
</div>


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
     <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
     <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita) ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
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
     <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
     <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita) ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
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
   <div class="thumbnail-kategori-utama" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>);">
     <div class="overlay-kategori-utama"></div>
        <div class="page-title-kategori-utama">
          <p><?php echo $value->tanggal_post; ?></p>
          <a class="judul-kategori-utama" href="<?php echo base_url('home/read/'.$value->slug_berita) ?>"><?php echo $value->judul_berita; ?></a>
          <br>
           <span class="">Oleh <a href="" style="color: white"><?php echo $value->nama; ?></a></span>
        </div>
     </div>
    <?php } else { ?>

<div class="media">
    <div class="media-left">
        <a href="#"><img class="media-object" src="<?php echo base_url('assets/upload/image/thumbs/'.$value->gambar); ?>" alt="Generic placeholder image"></a>
    </div>
    <div class="media-body"><h3 class="media-heading"><a href="<?php echo base_url('home/read/'.$value->slug_berita) ?>" target="_self"><?php echo $value->judul_berita; ?></a></h3> 
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