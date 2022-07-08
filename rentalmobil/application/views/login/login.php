<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url('assets/img/carr.png')?>">
  <title>CarsRent - Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition login-page" style=" background-size: cover; background-position: center;  background-image: url(<?=base_url('assets/img/bg-utama.jpg');?>);">
<div class="login-box">
<div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><img style="width: 55px;" src="<?=base_url('assets/img/carr.png')?>" alt=""> <b>Cars</b>Rent</a>
    </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <?= $this->session->flashdata('message'); ?>
    <?php if(isset($_SESSION['gagal'])) { ?>
      <div class="alert alert-primary">
       <span><?php echo @$_SESSION['gagal'];?></span> 
      </div>
    <?php } ?>
     <?php echo form_open('login/prosesLogin',['action'=>'POST','autocomplete'=> false]);?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" value="" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-2">
            <button type="submit" class="form-control btn btn-primary btn-block">SIGN IN</button>
        </div>
    <?php echo form_close(); ?>
      <p class="mb-0 text-center">Belum punya akun?
        <a href="<?= base_url();?>index.php/login/register">Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
<br>
<div>
  <a href="<?php echo base_url('index.php/home')?>">
  <button type="button" class="btn btn-outline-primary">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
  </svg>
  </button>
  </a>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js')?>"></script>
</body>
</html>