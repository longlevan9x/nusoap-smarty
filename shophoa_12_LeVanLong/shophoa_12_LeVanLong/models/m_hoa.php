<?php
include_once("database.php");
class M_hoa extends database
{
	public function Doc_hoa_tieu_bieu($vt=-1,$limit=-1)
	{
		$data = array();
		$this->setQuery("SELECT * FROM hoa LIMIT $vt,$limit");
		$data = $this->loadAllRows();
		return $data;

	}
	
	public function Doc_hoa_theo_chu_de($MaCD,$vt=-1,$limit=-1)
	{
		$data = array();
		$this->setQuery("SELECT * FROM chude_hoa,hoa,chu_de WHERE chude_hoa.MaHoa = hoa.MaHoa AND chude_hoa.MaCD = chu_de.MaCD AND chude_hoa.MaCD = $MaCD LIMIT $vt,$limit");
		$data = $this->loadAllRows();
		return $data;
		
	}
	public function Lay_ten_chu_de($MaCD)
	{
		
	}
	
	
	
}
?>