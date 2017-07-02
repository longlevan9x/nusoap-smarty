<?php
include_once("database.php");
class M_khach_hang extends database
{
	// ma_khach_hang, ten_khach_hang, phai, email, dia_chi, dien_thoai, ghi_chu
	// Phương thức Them_khach_hang
	public function add_data($ten_khach_hang, $phai, $email, $dia_chi, $dien_thoai, $ghi_chu)
	{
		$flag = FALSE;
		$this->setQuery("INSERT INTO khach_hang VALUES($ten_khach_hang, $phai, $email, $dia_chi, $dien_thoai, $ghi_chu)");
		if ($this->execute()) {
			$flag = TRUE;
		}
		return $flag;
	}
}
?>