<?php
	DEFINE('HTTP_PATH',	$_SERVER['HTTP_HOST']); 
	DEFINE("FILE_PATH" ,$_SERVER['DOCUMENT_ROOT']);
	DEFINE("BASEPATH","/Classifields_new");
	//echo "test".$_SERVER['HTTP_HOST'];exit;
	//if(stristr($_SERVER['HTTP_HOST'] ,"localhost")) { // Localhost
		/* DB connection String*/
		$DBINFO['DBHOST'] = "localhost";
		$DBINFO['DBName'] = "addbuya";
		$DBINFO['DBUserName'] = "root";
		$DBINFO['DBPassword'] = "";
	//}
?>
