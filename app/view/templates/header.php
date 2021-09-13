<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL;?>css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>mahasiswa">Mahasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>