<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faith in the future</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body background-color="black">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?link=1">Home</a>
        </li>
        <li class="nav-item">
          <a  href="index.php?link=2" class="nav-link">Cadastro de Usuário</a>
        </li>
        <li class="nav-item">
        <a href="index.php?link=3" class="nav-link">Área Restrita</a>
        </li>
        <li class="nav-item">
        <a class="nav-link">Usuário</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="search" type="search" placeholder="search" aria-label="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1 align="center">Faith in the future</h1>
<div class="container">
  <?php
  $link = @$_GET['link'];
  $pag[1]='principal.php';
  $pag[2]='cadUsuario.php';
  $pag[3]='areaRestrita.php';
  $pag[4]='usuario.controller.php';


  if (!empty($link)){
    if(file_exists($pag[$link])){
      include $pag[$link];
    }}else{
      trim(include 'principal.php');
  }
  ?>
</div>
    <div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">Site PHP com MYSQL</h5>
    <p class="card-text">Site para desenvolvimento de cadastro de usuário com foto</p>
    <a href="index.php?link=1" class="btn btn-primary">HOME</a>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>