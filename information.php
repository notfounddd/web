<?php
$link = mysqli_connect('127.0.0.1', 'root', 'kali');
if (!$link) {
	die('Error: ' . mysqli_error());
}
echo 'Zaebis';
mysqli_close($link);
?>