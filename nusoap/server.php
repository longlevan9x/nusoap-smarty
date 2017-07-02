<?php
require_once 'lib/nusoap.php';
require_once 'config/database.php';
$server = new nusoap_server();
$namespace = "http://localhost:8031/nusoap/server.php?wsdn";
$server->configureWSDL('server', $namespace);
$server->wsdl->schemaTargetNamespace = $namespace;
// struct và array
// $server->wsdl->addComplexType(// định nghĩa các kiểu server trả về
// 	'Person',
// 	'complexType',
// 	'struct',
// 	'all',
// 	'',
// 	[
// 	'id_tk'       => ['name' => "id_tk",       'type' => "xsd:int"],
// 	'TenDangNhap' => ['name' => "TenDangNhap", 'type' => "xsd:string"],
// 	'MatKhau'     => ['name' => "MatKhau",     'type' => "xsd:string"],
// 	'TenHienThi'  => ['name' => "TenHienThi",  'type' => "xsd:string"],
// 	'DiaChi'      => ['name' => "DiaChi",      'type' => "xsd:string"],
// 	'SDT'         => ['name' => "SDT",         'type' => "xsd:int"],
// 	'Email'       => ['name' => "Email",       'type' => "xsd:string"],
// 	]
// );
$server->wsdl->addComplexType(// định nghĩa các kiểu server trả về
	'PersonUser',
	'complexType',
	'struct',
	'all',
	'',
	[
		'id_tk'       => ['name' => "id_tk",       'type' => "xsd:int"],
		'TenDangNhap' => ['name' => "TenDangNhap", 'type' => "xsd:string"],
		'MatKhau'     => ['name' => "MatKhau",     'type' => "xsd:string"],
		'TenHienThi'  => ['name' => "TenHienThi",  'type' => "xsd:string"],
		'DiaChi'      => ['name' => "DiaChi",      'type' => "xsd:string"],
		'SDT'         => ['name' => "SDT",         'type' => "xsd:int"],
		'Email'       => ['name' => "Email",       'type' => "xsd:string"],
	]
);
// $server->register('checkLogin',
// 	[
// 		'username' => 'xsd:string',
// 		'password' => 'xsd:string',
// 	],
// 	[
// 		'return' => 'tns:Person'
// 	],
// 	'urn:server',
// 	'urn:server#test',
// 	'rpc',
// 	'encoded',
// 	'server Test'
// );
$server->register('getAllDataUser',[],
	[
		'return' => 'tns:PersonUser'
	],
	'urn:server',
	'urn:server#getAllDataUser',
	'rpc',
	'encoded',
	'server Test'
);

function checkLogin($username, $password){
	$data = [];
	$conn = connection();
	$sql = "SELECT * FROM taikhoan WHERE TenDangNhap = :username AND MatKhau = :password";
	$stmt = $conn->prepare($sql);
	if ($stmt) {
		$stmt->bindParam(":username", $username, PDO::PARAM_STR);
		$stmt->bindParam(":password", $password, PDO::PARAM_STR);
		if ($stmt->execute()) {
			if ($stmt->rowCount() > 0) {
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
			}
		}
	}
	$stmt->closeCursor();
	disconnection($conn);
	return $data;
}

function getAllDataUser(){
	$data = array();
	$conn = connection();
	$sql = "SELECT * FROM taikhoan";
	$stmt = $conn->prepare($sql);
	if ($stmt) {
		if ($stmt->execute()) {
			if ($stmt->rowCount() > 0) {
				$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}
		$stmt->closeCursor();
	}
	disconnection($conn);

	return $data;
}
// echo "<pre>"	;print_r(getAllDataUser());

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : file_get_contents('php://input');
$server->service($HTTP_RAW_POST_DATA);
?>