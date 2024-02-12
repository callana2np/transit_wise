<?php
$server = "localhost"; // Local server
$dbusername = "root";
$password = "";
$db = "transitwise";
$debug = "false";

if ($dbconn = mysqli_connect($server, $dbusername, $password, $db)){
	//echo "connected";
}
else {
	echo "not connected";
}

if ($dbconn->connect_error) {
	echo nl2br("\n");
	echo nl2br("ERROR: could not connect to database. \n");
	die('Could not connect: ' . $dbconn->connect_error);
} elseif ($debug == "true") {
	echo nl2br("\nDEBUG:\n");
	echo nl2br("3 \n 2 \n 1...");
	echo nl2br("\n Connected successfully\n");
}

//You can use the command below to set the default database to another db.
//mysqli_select_db($dbconn, "webiii");
