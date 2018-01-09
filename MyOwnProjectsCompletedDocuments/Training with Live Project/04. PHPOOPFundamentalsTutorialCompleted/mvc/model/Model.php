<?php
include 'DB.php';
	class Model
	{
		
		public function gtStudentData()
		{
			$sql = 'SELECT * FROM tbl_sutdent';
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>