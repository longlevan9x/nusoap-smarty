<?php
include 'Pager.php';
class C_hoa
{
	public function Hien_thi_hoa_tieu_bieu()
	{
		$baseUrl = $_SERVER['PHP_SELF'];
		$paging = new pager();
		// Models
		include_once("models/m_hoa.php");
		$m_hoa = new m_hoa();
		// Phân trang
		$data  = $m_hoa->Doc_hoa_tieu_bieu(0,1000);

		$limit = 8;
		$page  = isset($_GET['page']) ? $_GET['page'] : 1 ;


		$link = $paging->createLink($baseUrl, array("page"=>"{page}"));
		$dataPaging = $paging->paging($link, count($data), $page, $limit);
		$dataByPage = $m_hoa->Doc_hoa_tieu_bieu($dataPaging['start'], $dataPaging['limit']);


		$data = array(
			'paging'   => $dataPaging,
			'data' => $dataByPage,
		);


		// Views
		$title="Sản phẩm mới";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php");	
	}
	public function Hien_thi_hoa_theo_chu_de()
	{
		// Modes
		include_once("models/m_hoa.php");
		$baseUrl = $_SERVER['PHP_SELF'];
		$paging = new pager();
		// Models
		include_once("models/m_hoa.php");
		$m_hoa = new m_hoa();
		// Phân trang
		$chude = isset($_GET['MaCD']) ? $_GET['MaCD'] : 1;
		$data  = $m_hoa->Doc_hoa_theo_chu_de($chude,0,1000);

		$limit = 8;
		$page  = isset($_GET['page']) ? $_GET['page'] : 1 ;


		$link = $paging->createLink($baseUrl, array("page"=>"{page}",'MaCD' => $chude));
		$dataPaging = $paging->paging($link, count($data), $page, $limit);
		$dataByPage = $m_hoa->Doc_hoa_theo_chu_de($chude,$dataPaging['start'], $dataPaging['limit']);


		$data = array(
			'paging'   => $dataPaging,
			'data' => $dataByPage,
		);
		
		// Views
		$title="Tên chủ đề";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php");
	}
	public function Tim_hoa()
	{
		// Xử lý tìm webservice
		require_once ('nuSoap/nusoap.php');

		//Khai báo tham số Input
		// Khai báo tên miền
		//Tạo đối tượng tham chiếu đến WebServeices
		$wsdl = "http://dichvuthi.csc.edu.vn/ws_qlbh/services.php?wsdl";
		$client = new nusoap_client($wsdl, 'wsdl');
		$err = $client->getError();
		if ($err) {
			print_r($err);die;
		}

		// Gọi hàm và truyền tham số 



		$hoas=array();
		if(!empty($response))
		{
			if (isset($_POST['sub_btn'])) {
				$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

				$data = $client->call('GetFlowers', ['ID' => $keyword,]);
			}
		}
		$data = array();
		
		// Views
		$title="Tìm kiếm hoa";
		$view="views/hoa/v_hoa.php";
		include("includes/layout.php"); 
	}
}
?>