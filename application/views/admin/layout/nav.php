<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li><a href="<?php echo base_url('admin/dasbor') ?>"><i class="fa fa-dashboard"></i><span> Dashboard</span> </a></li>

        <!-- Menu Berita -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span> Berita / Profil </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/berita') ?>"><i class="fa fa-table"></i> Data Berita/Profil </a></li>
            <li><a href="<?php echo base_url('admin/berita/tambah') ?>"><i class="fa fa-plus"></i> Tambah Berita/Profil </a></li>

            <!-- Kategori Berita-->
            <li><a href="<?php echo base_url('admin/kategori') ?>"><i class="fa fa-tags"></i> Kategori Berita </a></li>
          </ul>
        </li>

       

        <!-- Menu User -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-lock"></i> <span> User Administrator </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-table"></i> Data User Administrator </a></li>
            <li><a href="<?php echo base_url('admin/user/tambah') ?>"><i class="fa fa-plus"></i> Tambah User Administrator </a></li>
          </ul>
        </li>

       
        <!-- Menu Iklan -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span> Iklan </span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/iklan') ?>"><i class="fa fa-table"></i> Data Iklan </a></li>
            <li><a href="<?php echo base_url('admin/iklan/tambah') ?>"><i class="fa fa-plus"></i> Tambah Iklan</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php echo $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dasbor') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('admin/' .$this->uri->segment(2)) ?>">
          <?php echo ucfirst(str_replace('_',' ',$this->uri->segment(2))) ?>
        </a></li>
        <li class="active"><?php echo $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $title ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">