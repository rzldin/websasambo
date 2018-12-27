<!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Sasambo - Portal Berita Online Sumbawa
   </title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/template/assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/template/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<!--===============================================================================================-->

 </head>
 <body>
      <div class="limiter">
      <div class="container-login100" style="background-color: #D6DFE5;">

      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <span class="login100-form-title p-b-49">
            <img style="height: 30px;" src="<?php echo base_url() ?>assets/template/assets/img/logo.jpeg">
          </span>
          <?php

          echo validation_errors('<div class="alert alert-warning">','</div>');

          echo form_open(base_url('register/proses_register'));
          ?>
          <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                              <span class="label-input100">Nama</span>
                              <input class="input100" type="text" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Type your name">
                              <span class="focus-input100" data-symbol="&#xf206;"></span>
                              <p>  </p>
                         </div>

                         <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                              <span class="label-input100">Username</span>
                              <input class="input100" type="username" name="username" value="<?php echo set_value('username') ?>" placeholder="Type your username">
                              <span class="focus-input100" data-symbol="&#xf206;"></span>
                              <p></p>
                         </div>

                         <div class="wrap-input100 validate-input" data-validate = "Username is required">
                              <span class="label-input100">Email</span>
                              <input class="input100" type="Email" name="email" value="<?php echo set_value('email') ?>" placeholder="Type your email">
                              <span class="focus-input100" data-symbol="&#xf0e0;"></span>
                              <p></p>
                         </div>

                         <br>

                         <div class="wrap-input100 validate-input" data-validate="Password is required">
                              <span class="label-input100">Password</span>
                              <input class="input100" type="password" name="password" value="<?php echo set_value('password') ?>" placeholder="Type your password">
                              <span class="focus-input100" data-symbol="&#xf190;"></span>
                              <p></p>
                         </div>

                         <br>
                         
                         <div class="container-login100-form-btn">
                              <div class="wrap-login100-form-btn">
                                   <div class="login100-form-bgbtn"></div>
                                   <button class="login100-form-btn">
                                        Buat Akun
                                   </button>
                              </div>
                         </div>

          <div class="txt1 text-center p-t-54 p-b-20">
            <span class="txt1 p-b-17">
              Sudah punya akun?
            </span>
            <br>
            <a href="<?php echo base_url('userlogin') ?>" class="txt2">
              Login
            </a>
          </div>

          <div class="text-center p-t-8 p-b-31">
            <a href="<?php echo base_url('home') ?>">
              atau Kembali ke beranda
            </a>
          </div>

      </div>
    </div>
  </div>
  <?php
  echo form_close();
  ?>

 </body>