<?php
require_once 'lib/nusoap.php';
$wsdl = "http://localhost:8031/nusoap/server.php?wsdl";
$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
	print_r($err);die;
}
$result = $client->call('checkLogin', ['username' => 'admin1', 'password' => md5('123456')]);
print_r($result);
 ?>