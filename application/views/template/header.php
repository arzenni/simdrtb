<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/Alice.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Fahkwang:600|Merriweather" rel="stylesheet">
    <!-- MDBootstrap Datatables  -->
    <link href="<?=base_url()?>assets/css/addons/datatables.min.css" rel="stylesheet">
    <title><?= $title ;?></title>
  </head>
  <body>
    
  <div>
  <nav class="navbar fixed-top navbar-expand-lg">
    <a class="navbar-brand" href="#">TB MDR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url();?>pasien">Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rekam Medis</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pengobatan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url()?>pemeriksaan/">Diagnosa</a>
            <a class="dropdown-item" href="<?= base_url()?>statistik">Statistik</a>
            <a class="dropdown-item" href="<?= base_url()?>excel_export">Something else here</a>
            <a class="dropdown-item" href="<?= base_url()?>ruang">Tambah Ruang</a>
            <a class="dropdown-item" href="<?= base_url()?>tes_tcm">Tes TCM</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
