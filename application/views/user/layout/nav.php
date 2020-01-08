<?php
// Ambil data user berdasarkan data login
$id_user      = $this->session->userdata('id_user');

$user_aktif   = $this->user_model->detail($id_user); 
  
?>
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
                <li><a href="<?php echo base_url('user/content/pariwisata') ?>">Pariwisata</a></li>
                <li><a href="<?php echo base_url('user/content/ekonomi') ?>">Ekonomi</a></li>
                <li><a href="<?php echo base_url('user/content/teknologi') ?>">Teknologi</a></li>
                <li><a href="<?php echo base_url('user/content/olahraga') ?>">Olahraga</a></li>
                <li><a href="<?php echo base_url('user/content/pendidikan') ?>">Pendidikan</a></li>
                <li><a href="<?php echo base_url('user/content/politik') ?>">Politik</a></li>
                <li><a href="<?php echo base_url('user/content/sosbud') ?>">Sosbud</a></li>
                <li><a href="<?php echo base_url('user/content/hukum') ?>">Hukum</a></li>
                <li class="dropdown">
                <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user_aktif->nama ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('akun/profile') ?>">Profile</a></li>
                  <li><a href="<?php echo base_url('akun/addstory') ?>">Buat Story</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?php echo base_url('userlogin/logout') ?>" class="btn btn-success btn-flat">Logout</a></li>
                </ul>
              </li> 

          </ul>
        </div>
      </div>
    </nav>