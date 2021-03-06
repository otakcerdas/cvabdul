<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sistem Informasi Cuti Karyawan - SICAK</title>

    <link href="<?php echo base_url('assets/image/gelora2.png'); ?>" rel="icon" type="image/x-icon" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/dashboard.css');?>" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url('/') ?>">
        <span><font face="Trebuchet MS" size="4"><center>SICAK - ADM</center></font></span>
      </a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <!-- <a class="nav-link" href="<?php echo base_url('index.php/login/logout');?>"> -->
            <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#exampleModal">
              <font color="red">Keluar</font>
            </button>
          <!-- </a> -->
        </li>
      </ul>
    </nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('index.php/page/loginadmin') ?>">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/karyawan/karyawanadmin') ?>">
              <span data-feather="users"></span>
              Karyawan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/absensi/absensiadmin') ?>">
              <span data-feather="list"></span>
              Absensi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/cuti/cutiadmin') ?>">
              <span data-feather="paperclip"></span>
              Cuti
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yang ingin keluar ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <a class="nav-link" href="<?php echo base_url('index.php/login/logout');?>">
              <button type="button" class="btn btn-primary">Keluar</button>
            </a>
          </div>
        </div>
      </div>
    </div>