<?php 
	include_once '../../config/dbconnect.php';

	if(isset($_POST['btn-update'])) {
		$nis = $_GET['edit_nis'];
		$status = $_POST['edit_status'];

		if($crud->update($nis,$status)) {
			header("Location: data-pickup.php?berhasil");
		}
		else {
			header("Location: data-pickup.php?gagal");
		}
	}

	if(isset($_GET['edit_nis'])) {
		$nis = $_GET['edit_nis'];
		extract($crud->getID($nis));
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
    <link href="../../assets/dist/css/list-groups.css" rel="stylesheet">
  </head>
  <body>

<div class="container">
  <main>
    <div class="text-center" style="padding-top:40px">
      <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Update Status Student</h2>
      <p class="lead">Update student conditions according to class conditions.</p>
      <h1 class="display-6"><?php echo $NAMA_LENGKAP; ?></h1>
    </div>

		<form method='post'>
			<input type='text' name='edit_nis' class='form-control' value="<?php echo $NAMA_LENGKAP; ?>" hidden required>

		<div class="list-group list-group-checkable">
		  <input class="list-group-item-check" type="radio" name="edit_status" id="listGroupCheckableRadios1" value='<span class="badge bg-warning text-dark">Masih mengerjakan tugas</span>'>
		  <label class="list-group-item py-3" for="listGroupCheckableRadios1">
		    Masih mengerjakan tugas
		  </label>

		  <input class="list-group-item-check" type="radio" name="edit_status" id="listGroupCheckableRadios2" value='<span class="badge bg-secondary">Persiapan pulang</span>'>
		  <label class="list-group-item py-3" for="listGroupCheckableRadios2">
		    Persiapan pulang
		  </label>

		  <input class="list-group-item-check" type="radio" name="edit_status" id="listGroupCheckableRadios3" value='<span class="badge bg-info text-dark">Menuju tempat penjemputan</span>'>
		  <label class="list-group-item py-3" for="listGroupCheckableRadios3">
		    Menuju tempat penjemputan
		  </label>

		  <div class="btn-group" role="group" aria-label="Basic example">
		  	<button type="submit" name="btn-update" class="btn btn-success">Update</button>
		  </div>		  	
		  
		</div>

		</form>

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
