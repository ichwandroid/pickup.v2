<?php
	include_once '../config/dbconnect.php';
	if(isset($_POST['btn-update']))
	{
	$nis = $_GET['edit_nis'];
	$status = $_POST['edit_status'];
	
	if($crud->update($nis,$status))
	{
		$msg = "<div class='alert alert-info'>
				Modification avec success
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				Erreur de modification
                </div>";
	}
}

if(isset($_GET['edit_nis']))
{
	$nis = $_GET['edit_nis'];
	extract($crud->getID($nis));	
}
?>

<div class="container">
<?php 
	if(isset($msg))
	{
		echo $msg;
	}
?>
</div>
<div class="container">	 
    <form method='post'>
    <table class='table table-bordered'>
        <tr>
            <td>Nome</td>
            <td><input type='text' name='edit_nis' class='form-control' value="<?php echo $NAMA_LENGKAP; ?>" required></td>
            <td><input type='text' name='edit_status' class='form-control' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Modifier l'utilisateur
				</button>
                <a href="index.php" class="btn btn-large btn-success" style="float: right;"><i class="glyphicon glyphicon-backward"></i> &nbsp; Annuler</a>
            </td>
        </tr>
    </table>
</form>
</div>