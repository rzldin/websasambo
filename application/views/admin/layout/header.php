<?php
// Ambil data user berdasarkan data login
$id_user      = $this->session->userdata('id_user');

$user_aktif   = $this->user_model->detail($id_user); 
  
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin/dasbor') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SASAMBO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
              <span class="hidden-xs"><?php echo $user_aktif->nama ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/admin/dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user_aktif->nama ?> - <?php echo $user_aktif->akses_level ?>
                  <small> Updated: <?php echo date('d M Y',strtotime($user_aktif->tanggal)) ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('admin/profile') ?>" class="btn btn-success btn-flat"><i class="fa fa-user"></i> Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-success btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>