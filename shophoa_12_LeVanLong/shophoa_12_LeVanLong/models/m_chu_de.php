<?php
include_once("database.php");
class M_chu_de extends database
{
	public function Doc_chu_de()
	{
		$data = array();
		$this->setQuery("SELECT * FROM chu_de");
		$data = $this->loadAllRows();
		return $data;
	}
}
?>