<?php
/**
 * Example Application
 *
 * @package Example-application
 */
// khai bao nusoap
require_once 'app/lib/nusoap.php';
require 'app/libs/Smarty.class.php';

$wsdl = "http://localhost:8031/nusoap/server.php?wsdl";
$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();

$smarty = new Smarty;

$smarty->setCacheDir('app/cache');
$smarty->setConfigDir('app/config');
$smarty->setPluginsDir('app/plugins');
$smarty->setTemplateDir('app/templates');
$smarty->setCompileDir('app/templates_c');
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 5;

$cn = isset($_GET['c']) ? trim($_GET['c']) : 'home';
switch ($cn) {
	case 'home':
		require_once("app/controller/home.php");
		break;
	
	default:
		# code...
		break;
}