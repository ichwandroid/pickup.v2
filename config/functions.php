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
	}
?>