<?php

	session_start();
	
	if(!isset($_SESSION['login'])){
		header("location: login2.php");
		exit;
	}

?>	

<!DOCTYPE html>
<html>
<head>
	<title>INDEXUSUARIO</title>
</head>
<body>
		HOLA
</body>
</html>