<!DOCTYPE html>
<html lang="en">
<head>
  <title>TUGAS UTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">PUSKESTREN</a> 
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=data">Tabel Pasien</a>
    </li>
    <li class="nav-item">
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=data">Tabel Obat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=input">Input Data</a>
    </li>
  </ul>
</nav> 

<?php

include 'libs.php';

?>

</body>
</html>
