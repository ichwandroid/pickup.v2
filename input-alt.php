<?php

  include 'config/dbconnect.php';
  if (isset($_POST['btn-save'])) {
    $nis = $_POST['nis'];
    $status = $_POST['status'];

    if ($crud->create($nis,$status)) {
      header("Location: input-alt.php?berhasil");
    }
    else {
      header("Location: input-alt.php?gagal");
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>List groups · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/list-groups/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="assets/dist/css/list-groups.css" rel="stylesheet">
  </head>
  <body>

<div class="container">
  <main>
    <div class="text-center" style="padding-top:40px">
      <a href="index.php"><h2><i class="fas fa-dragon"></i></h2></a>
      <h2>Update Status Student</h2>
      <p class="lead">Update student conditions according to class conditions.</p>


      <!-- Assets Alert -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
   
  <!-- Alert -->
  <?php if (isset($_GET['berhasil'])) { ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div><strong>Success!</strong> Your data has been successfully entered!</div>
    </div>
  <?php } else if (isset($_GET['gagal'])) { ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div><strong>Error!</strong> Your data did not enter / is already in the database!</div>
    </div>
  <?php } ?>



    </div>

    <form method='post'>

      <div class="list-group">
        <input type="text" id="nis" name="nis" placeholder="Cari Siswa..." class="form-control" autocomplete="off" />
        <ol style="padding-left: 1px;" id="resultlist"></ol>
          <i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas</i>
      </div>
    
    <div class="list-group list-group-checkable">
      Penjemput
      <input class="list-group-item-check" type="radio" name="status" id="listGroupCheckableRadios1" value='<span class="badge bg-danger">Ditunggu Orang Tua</span>'>
      <label class="list-group-item py-3" for="listGroupCheckableRadios1">
        Orang Tua
      </label>

      <input class="list-group-item-check" type="radio" name="status" id="listGroupCheckableRadios2" value='<span class="badge bg-danger">Ditunggu Antar Jemput</span>'>
      <label class="list-group-item py-3" for="listGroupCheckableRadios2">
        Driver Antar Jemput
      </label>

      <input class="list-group-item-check" type="radio" name="status" id="listGroupCheckableRadios3" value='<span class="badge bg-danger">Ditunggu Ojol</span>'>
      <label class="list-group-item py-3" for="listGroupCheckableRadios3">
        Driver Ojek Online
      </label>

      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="submit" name="btn-save" class="btn btn-success">Submit</button>
      </div>        
      
    </div>

    </form>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

           
  </body>
</html>




<script src="assets/dist/js/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({ cache: false });
    $('#nis').keyup(function(){
        $('#resultlist').html('');
        $('#state').val('');
        var searchField = $('#nis').val();
        var expression = new RegExp(searchField, "i");

        $.getJSON('data.json', function(data) {
          $.each(data, function(key, value){
            if (value.nis.search(expression) != -1 || value.kelas.search(expression) != -1 || value.nama_lengkap.search(expression) != -1 || value.nama_panggilan.search(expression) != -1){
              $('#resultlist').append(`
                <li class="list-group-item list-group-item-action list-group-item-secondary">
                <div class="d-flex w-100 justify-content-between">
                 <h5 class="mb-1">`+value.nama_panggilan+`</h5>
                 <small class="badge bg-primary rounded-pill"> `+value.nis+`</small>
                </div>
                <p class="mb-1">`+value.nama_lengkap+`</p>
                <span class="nama" hidden>`+value.nis+`</span>
                 <small> `+value.kelas+`</small>
                </li>`);
            }
          });   
        });
    });

    $('#resultlist').on('click', 'li', function() {
      let nis = $(this).children('.nama').text();

      $('#nis').val(nis);
      $("#resultlist").html('');
    });
  });
</script>

<script type="text/javascript">
      window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(200, function(){
        $(this).remove(); 
    });
}, 2000);
    </script>

