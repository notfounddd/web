<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1";
$dbName = "first";

$link = mysqli_connect($servername, $username, $password);
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($link, $sql)) {
  echo "Не удалось создать БД";
}

mysqli_select_db($link, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass VARCHAR(20) NOT NULL
)";
if(!mysqli_query($link, $sql)) {
  echo "Не удалось создать таблицу Users";
}

mysqli_close($link);
?>
