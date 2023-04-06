<?php

$dbhost = 'localhost:3306';
$dbuser = 'jkolkman_jkolkman';
$dbpass = 'jarnodebeer2';
$dbname = 'jkolkman_toetsnetwerken';
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $dbname = 'netwerktoets2023';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>