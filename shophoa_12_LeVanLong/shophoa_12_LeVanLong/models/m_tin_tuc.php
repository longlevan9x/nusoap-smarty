<?php
include_once("database.php");
class M_tin_tuc extends database
{
	// Xây dựng phương thức Doc_tin_tuc_theo_ma_tin_tuc($MaTT)
	public function Doc_tin_tuc_theo_ma_tin_tuc($MaTT)
	{
		$data = array();
		$this->setQuery("SELECT * FROM tin_tuc WHERE MaTT = $MaTT");
		$data = $this->loadRow();
		return $data;
	}
}
?>