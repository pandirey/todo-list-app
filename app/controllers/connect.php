<?php 

$host = 'db4free.net';
$username = 'pandirey';
$password = 'Gwaping$1';
$dbname = 'todo_db';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

echo 'connected succesfully';

 ?>