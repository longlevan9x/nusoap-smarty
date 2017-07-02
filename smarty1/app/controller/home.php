<?php
// $name = "abc";

require "app/models/Home_model.php";
$method = isset($_GET['m']) ? trim($_GET['m']) : "index";
switch ($method) {
	case 'index':
		$data = getAllDataUser();
		$smarty->assign("info", $data);
		$smarty->display("home/index.tpl");
		break;

	case 'delete':
		$id = isset($_GET['id']) ? trim($_GET['id']) : "0";
		if (is_numeric($id)) {
			deleteDataUser($id);
			header("Location: index.php?c=home");
		}
		else{
			echo "Page not found";die();
		}
		break;

	case 'edit':
		$id = isset($_GET['id']) ? trim($_GET['id']) : "0";
		if (is_numeric($id)) {
			$info = getDataUserById($id);
			if (!empty($info)) {
				$smarty->assign("info", $info);
				$smarty->display("home/edit.tpl");
			}
			else
			{
				header("Location: index.php?c=home");
			}
		}
		else{
			echo "Page not found";die();
		}
		break;
	case 'handle':
		if (isset($_POST['btnSubmit'])) {
			$username = isset($_POST['txtUsername']) ? trim($_POST['txtUsername']) : "";
			$fullname = isset($_POST['txtFullname']) ? trim($_POST['txtFullname']) : "";
			$phone = isset($_POST['txtPhone']) ? trim($_POST['txtPhone']) : "";
			$address = isset($_POST['txtAddress']) ? trim($_POST['txtAddress']) : "";

			$id = isset($_GET['id']) ? trim($_GET['id']) : "0";
			if (is_numeric($id)) {
				$info = getDataUserById($id);
				if (!empty($info)) {
					$smarty->assign("info", $info);
					$smarty->display("home/edit.tpl");
				}
				else
				{
					header("Location: index.php?c=home");
				}
			}
			else{
				echo "Page not found";die();
			}
		}
		break;

	default:
		# code...
		break;
}

 ?>