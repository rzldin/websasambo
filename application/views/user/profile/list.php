<?php
//Notifikasi
//  if($this->session->flashdata('sukses'))
//  {
//     echo '<div class="alert alert-success">';
//     echo $this->session->flashdata('sukses');
//     echo '</div>';
//  }
// echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('akun/profile'));

$id_user      = $this->session->userdata('id_user');

$user_aktif   = $this->user_model->detail($id_user); 
?>

<!-- <head>
<title><?php echo $title ?> </title>
</head> -->
<body>
  <div class="tampilan-profile">
    <p align="center">Tampilan Profil Data</p>
    <div id="wrapper">
     <div class="titleprofile" align="center">Profil Saya</div>
     <div class="photoprofile" align="center">
     <img src="<?php echo base_url() ?>assets/admin/dist/img/user8-128x128.jpg" class="imgprofile"></img>
     </div>
     	<div class="dataprofile" align="center">
     		 <p>
                      <?php echo $user_aktif->nama ?> - <?php echo $user_aktif->akses_level ?><br>
                      <h3> Updated: <?php echo date('d M Y',strtotime($user_aktif->tanggal)) ?></h3>
             </p>
             <div class="text-center p-t-8 p-b-31">
                <a href="<?php echo base_url('user/dasbor') ?>">
                  Kembali ke beranda
                </a>
              </div>
     	</div>
    </div>
  </div>
</body>
</html>