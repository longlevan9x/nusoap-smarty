<?php
	function connection(){
    	try{
        	$dbh = new PDO('mysql:host=localhost;dbname=book_store;charset=utf8','root', '');
        	return $dbh;
    	}
    	catch (PDOException $e) {
       	 	print "Error!: " . $e->getMessage() . "<br/>";
        	die();
   		}
	}

	function disconnection($conn){
   	 	$conn = null;
	}
 ?>