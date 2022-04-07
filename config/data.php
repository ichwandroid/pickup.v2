<?php 
	
	include("connect.php");
	$sql = mysqli_query($connect, "SELECT * FROM tbl_siswa"); 
	// JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS ORDER BY TANGGAL DESC
	$result = array();

	while ($row = mysqli_fetch_assoc($sql)) {
		$data[] = $row;
	}

	echo json_encode(array("result" => $data));
?>