<?php
	
	$connect	= mysqli_connect("localhost","root","","pickup") or die("gagal");

	$datascan	= mysqli_query($connect,"SELECT * FROM tbl_scan");
	$countscan  = mysqli_num_rows($datascan); 

	$scan1a	= mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='1 A - ZAINAB R.A'");
	$count1a  = mysqli_num_rows($scan1a); 

	$scan1a = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='1 A - ZAINAB R.A'");
	$scan1b = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='1 B - RUQAYYAH R.A'");
	$scan1c = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='1 C - UMMU KULTSUM'");
	$scan1d = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='1 D - FATHIMAH AZ ZAHRA R.A'");

	$scan2a = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='2 A - UMMU AIMAN R.A'");
	$scan2b = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='2 B - UMMU SYURAIK R.A'");
	$scan2c = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='2 C - UMMU SULAIM R.A'");
	$scan2d = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='2 D - UMMU MA\'BAD R.A'");

	$scan3a = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='3 A - SUMAYYAH BINTI KHAYYAT R.A'");
	$scan3b = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='3 B - ASMA\' BINTI ABU BAKAR R.A'");
	$scan3c = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='3 C - HALIMAH AS SA\'DIYAH R.A'");
	$scan3d = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='3 D - AL-KHANSA R.A'");

	$scan4a = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='4 A - GAZALAH AL-HARURIAH'");
	$scan4b = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='4 B - LAILA AL-GIFARIAH'");
	$scan4c = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='4 C - RUFAIDAH AL-ANSHARIYAH'");
	$scan4d = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='4 D - NUSAIBAH BINTI KA\'AB'");

	$scan5a = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='5 A - KHADIJAH R.A'");
	$scan5b = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='5 B - SAUDAH R.A'");
	$scan5c = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='5 C - AISYAH R.A'");
	$scan5d = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='5 D - HAFSHAH R.A'");

	$scan6a = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='6 A - HINDUN R.A'");
	$scan6b = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='6 B - RAMLAH R.A'");
	$scan6c = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='6 C - JUWAIRIYAH R.A'");
	$scan6d = mysqli_query($connect,"SELECT * FROM tbl_siswa JOIN tbl_scan ON tbl_scan.NIS = tbl_siswa.NIS WHERE KELAS='6 D - SHAFIYYAH R.A'");

	$count1a = mysqli_num_rows($scan1a);
	$count1b = mysqli_num_rows($scan1b);
	$count1c = mysqli_num_rows($scan1c);
	$count1d = mysqli_num_rows($scan1d);

	$count2a = mysqli_num_rows($scan2a);
	$count2b = mysqli_num_rows($scan2b);
	$count2c = mysqli_num_rows($scan2c);
	$count2d = mysqli_num_rows($scan2d);

	$count3a = mysqli_num_rows($scan3a);
	$count3b = mysqli_num_rows($scan3b);
	$count3c = mysqli_num_rows($scan3c);
	$count3d = mysqli_num_rows($scan3d);

	$count4a = mysqli_num_rows($scan4a);
	$count4b = mysqli_num_rows($scan4b);
	$count4c = mysqli_num_rows($scan4c);
	$count4d = mysqli_num_rows($scan4d);

	$count5a = mysqli_num_rows($scan5a);
	$count5b = mysqli_num_rows($scan5b);
	$count5c = mysqli_num_rows($scan5c);
	$count5d = mysqli_num_rows($scan5d);

	$count6a = mysqli_num_rows($scan6a);
	$count6b = mysqli_num_rows($scan6b);
	$count6c = mysqli_num_rows($scan6c);
	$count6d = mysqli_num_rows($scan6d);

?>