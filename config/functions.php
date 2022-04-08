<?php
	class crud {
		private $db;
		function __construct($connect) {
			$this->db = $connect;
		}

		// input data scan
		public function create($nis,$status)
		{
			try {
				$input = $this->db->prepare("INSERT INTO tbl_scan(NIS,STATUS) VALUES (:nis, :status)");
				$input->bindparam(":nis",$nis);
				$input->bindparam(":status",$status);
				return $input->execute();
			}
			catch(PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		// tampilkan data
		public function dataview($query)
		{
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			if ($stmt->rowCount()>0) 
			{
				while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) 
				{
					?>
					<tr>
						<td><?php print($row['NIS'])?></td>
						<td><?php print($row['NAMA_LENGKAP'])?></td>
						<td><?php print($row['KELAS'])?></td>
						<td><?php print($row['PANGGILAN'])?></td>
						<td><?php print($row['TANGGAL'])?></td>
						<td><?php print($row['STATUS'])?></td>
					</tr>
					<?php
				}
			}
			else
			{
				?>
				<div class="container" style="padding-bottom: 10px;">
					<button class="btn btn-danger" type="button" disabled>
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Tidak ada data...
					</button>
				</div>
				<?php
			}
		}
		// tampilkan data
		public function dataviewguru($query)
		{
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			if ($stmt->rowCount()>0) 
			{
				while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) 
				{
					?>
					<tr>
						<td><?php print($row['NIS'])?></td>
						<td><?php print($row['NAMA_LENGKAP'])?></td>
						<td><?php print($row['KELAS'])?></td>
						<td><?php print($row['PANGGILAN'])?></td>
						<td><?php print($row['TANGGAL'])?></td>
						<td><?php print($row['STATUS'])?></td>
						<td align="center">
							<a href="../class/edit.php?edit_nis=<?php print($row['NIS']); ?>">
								<i class="bi bi-lightning-charge-fill"></i>
							</a>
						</td>
					</tr>
					<?php
				}
			}
			else
			{
				?>
				<div class="container" style="padding-bottom: 10px;">
					<button class="btn btn-danger" type="button" disabled>
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Tidak ada data...
					</button>
				</div>
				<?php
			}
		}

		// scan id
		public function getID($nis)
		{
			$stmt = $this->db->prepare("SELECT * FROM tbl_siswa WHERE NIS=:nis");
			$stmt->execute(array(":nis"=>$nis));
			$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
			return $editRow;
		}

		// update data
		public function update($nis,$status)
		{
			try
			{
				$stmt=$this->db->prepare("UPDATE tbl_scan SET STATUS=:status WHERE NIS=:nis ");
				$stmt->bindparam(":status",$status);
				$stmt->bindparam(":nis",$nis);
				$stmt->execute();
				return true;
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
				return false;
			}
		}

		
	}
?>