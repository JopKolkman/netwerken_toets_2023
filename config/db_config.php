<?php

// $dbhost = 'localhost:3306';
// $dbuser = 'netwerken_user_2023';
// $dbpass = 'netwerken2023!';
// $dbname = 'netwerken_2023';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'netwerktoets2023';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>