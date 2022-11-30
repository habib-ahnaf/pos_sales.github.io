<?php
include 'config.php';
session_start();

// print_r($_SESSION);

//hak akses

if (isset($_SESSION['userid'])) {
    if ($_SESSION['role_id'] == 2) {
        //redirect ke halaman kasir.php
        header('Location:kasir.php');
    }
} else {
    $_SESSION['error'] = 'Anda harus login dahulu';
    header('location:login.php');
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Kasir PHP</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">KasirPHP</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=barang">
          <span data-feather="file"></span>
          Barang
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=role">
          <span data-feather="shopping-cart"></span>
          Role
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=user">
          <span data-feather="users"></span>
          User
        </a>
      </li>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </nav>

    <?php

      if (isset($_GET['page']) && $_GET['page'] != '') {
          include 'page/' . $_GET['page'] . '.php';
      } else {
          include 'page/barang.php';
      }
    ?>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
