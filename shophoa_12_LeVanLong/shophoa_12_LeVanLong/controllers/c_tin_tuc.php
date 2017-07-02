<?php
class C_tin_tuc
{
	public function Hien_thi_tin_tuc_theo_ma_tin_tuc()
	{
		// Modes

		include_once("models/m_tin_tuc.php");
		$M_tin_tuc = new M_tin_tuc();
		$matt = isset($_GET['MaTT']) ? $_GET['MaTT'] : 0;
		$data = [];
		$content ="";
		if (!empty($matt) && is_numeric($matt) && ($matt == 5 || $matt == 6 || $matt == 7))
		{
			$data = $M_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($matt);
		}
		else
		{
			$content = "Không tìm thấy trang";
		}
		// Views
		$title="Tên tin tức";
		$view="views/tin_tuc/v_tin_tuc.php";
		include("includes/layout.php");
	}	
}
?>