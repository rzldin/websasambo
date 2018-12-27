
<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    <?php echo $title ?>
  </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="assets/template/assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/template/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/template/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/template/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/template/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<!--===============================================================================================-->

 </head>
<body>
      <div class="limiter">
      <div class="container-login100" style="background-color: #D6DFE5;">

      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <span class="login100-form-title p-b-49">
            <img style="height: 30px;" src="assets/template/assets/img/logo.jpeg">
          </span>

    <?php 
  
    if($this->session->flashdata('sukses')) {
      echo '<div class="alert alert-success">';
      echo $this->session->flashdata('sukses');
      echo '</div>';

  }
    echo validation_errors('<div class="alert alert-warning">','</div>');

    echo form_open(base_url('userlogin'));
    ?>
    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" value="" placeholder="Type your username">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" value="" placeholder="Type your password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>

          <br>
          
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn">
                Login
              </button>
            </div>
          </div>

          <div class="txt1 text-center p-t-54 p-b-20">
            <span class="txt1 p-b-17">
              Belum punya akun?
            </span>
            <br>
            <a href="<?php echo base_url('register/register') ?>" class="txt2">
              Buat akun
            </a>
          </div>

          <div class="text-center p-t-8 p-b-31">
            <a href="<?php echo base_url('home') ?>">
              atau Kembali ke beranda
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>

 </body>
 </html>