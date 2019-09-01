<?php 
	define('DBINFO','mysql:host=localhost;dbname=pending');
	define('DBUSER','root');
	define('DBPASS','');

	function performQuery($query){
		$con = new PDO(DBINFO,DBUSER,DBPASS);
		$stmt = $con->prepare($query);
		if ($stmt->execute()) {
			return true;
		}else{
			return false;
		}
	}

	function fetchAll($query){
		$con = new PDO(DBINFO,DBUSER,DBPASS);
		$stmt = $con->prepare($query);
		return $stmt->fetchAll();
	}
?>