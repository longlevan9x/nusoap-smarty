<?php
require("app/configs/database.php");


function getAllDataUser(){
	global $client;
	$data = array();
	$data = $client->call('getAllDataUser',[]);
	return $data;
}

function getDataUserById($id){
	$data = array();
	$conn = connection();
	$sql = "SELECT * FROM taikhoan WHERE id_tk = :id LIMIT 1";
	$stmt = $conn->prepare($sql);
	if ($stmt) {
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if ($stmt->execute()) {
			if ($stmt->rowCount() > 0) {
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
			}
		}
		$stmt->closeCursor();
	}
	disconnection($conn);

	return $data;
}

function deleteDataUser($id){
	$flag = FALSE;
	$conn = connection();
	$sql = "DELETE FROM taikhoan WHERE id_tk = :id";
	$stmt = $conn->prepare($sql);
	if ($stmt) {
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		if ($stmt->execute()) {
			$flag = TRUE;
		}
		$stmt->closeCursor();
	}
	disconnection($conn);

	return $flag;
}
 ?>