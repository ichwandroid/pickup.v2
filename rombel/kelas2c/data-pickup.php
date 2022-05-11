<?php
  include '../../config/dbconnect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="2">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Track Pickup Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    

    <!-- Bootstrap core CSS -->
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../assets/dist/css/starter-template.css" rel="stylesheet">
  </head>
  <body>

    <div class="col-lg-10 mx-auto p-3 py-md-5">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="../../index.php"><button class="btn btn-primary me-md-2" type="button">Home</button></a>
      </div>
    
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
      <span class="fs-4"><i class="fas fa-dragon"></i> Track Pickup Dashboard</span>
    </a>
  </header>

  <main>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">NIS</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Kelas</th>
          <th scope="col">Nama Panggilan</th>
          <th scope="col">Waktu Penjemputan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $crud->dataviewguru("SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='2 C - UMMU SULAIM R.A' ORDER BY TIMESCAN DESC");?>
      </tbody>
    </table>
    
  <footer class="pt-5 my-5 text-muted border-top">
    Created by the Opsdanaksaleh team &middot; &copy; 2022
  </footer>
</div>
</main>

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>