<?php
class C_khach_hang
{
	public function Them_khach_hang()
	{
		include_once("models/m_khach_hang.php");
		$M_khach_hang = new M_khach_hang();
		// Xử lý thêm khách hàng
		$title="Thêm khách hàng";
		if (isset($_POST['btnGhi'])) {
			$ten_khach_hang = isset($_POST['ten_khach_hang']) ? $_POST['ten_khach_hang']:  '' ;
			$phai = isset($_POST['phai']) ? $_POST['phai']:  '' ;
			$email = isset($_POST['email']) ? $_POST['email']:  '' ;
			$dia_chi = isset($_POST['dia_chi']) ? $_POST['dia_chi']:  '' ;
			$dien_thoa = isset($_POST['dien_thoai']) ? $_POST['dien_thoai']:  '' ;
			$ghi_chu = isset($_POST['ghi_chu']) ? $_POST['ghi_chu']:  '' ;

			if (empty($ten_khach_hang) OR 
				empty($phai) OR 
				empty($email) OR 
				empty($dia_chi) OR 
				empty($dien_thoa) OR
				empty($ghi_chu )){
				$title = "Không được để trống";
			}
			else
			{
				$M_khach_hang->add_data($ten_khach_hang,$phai,$email,$dia_chi,$dien_thoa,$ghi_chu);
				if ($M_khach_hang)
				{
					$title = "them_khach_hang?mess=thanhcong";
				}
				else
				{
					$title = "them_khach_hang?mess=thatbai";
				}
			}
		}
		// Views
		$view="views/khach_hang/v_them_khach_hang.php";
		include("includes/layout.php");	
	}	
}
?>