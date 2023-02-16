<?php
	define("SERVERNAME", "localhost");
	define("USERNAME", "sooi_dbHeavenlySuites");
	define("PASSWORD", "DeBesteS001");
	define("DATABASE", "sooi_dbHeavenlySuites");
	
	//connectie maken met databank
	$dbconn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);
	//testen of de database connectie is gelukt
	//var_dump($dbconn);


?>