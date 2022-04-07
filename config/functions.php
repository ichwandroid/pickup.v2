<?php
	class crud {
		private $db;
		function __construct($connect) {
			$this->db = $connect;
		}

		// input data scan
		public function create($nis)
		{
			try {
				$input = $this->db->prepare("INSERT INTO tbl_scan(NIS) VALUES (:nis)");
				$input->bindparam(":nis",$nis);
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
	}
?>