 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">Sasambo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo base_url() ?>">Beranda<span class="sr-only">(current)</span></a></li>
              <li><a href="<?php echo base_url('content/kategori/pariwisata') ?>">Pariwisata</a></li>
              <li><a href="<?php echo base_url('content/kategori/ekonomi') ?>">Ekonomi</a></li>
              <li><a href="<?php echo base_url('content/kategori/teknologi') ?>">Teknologi</a></li>
              <li><a href="<?php echo base_url('content/kategori/olahraga') ?>">Olahraga</a></li>
              <li><a href="<?php echo base_url('content/kategori/pendidikan') ?>">Pendidikan</a></li>
              <li><a href="<?php echo base_url('content/kategori/politik') ?>">Politik</a></li>
              <li><a href="<?php echo base_url('content/kategori/sosbud') ?>">Sosbud</a></li>
              <li><a href="<?php echo base_url('content/kategori/hukum') ?>">Hukum</a></li>
              <li><a class="masuk" href="<?php echo base_url('userlogin') ?>">Daftar/Masuk</a></li>              
          </ul>
        </div>
      </div>
    </nav>