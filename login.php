<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctf";
$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
  echo "Invalid username or password.";
  exit;
}

setcookie("username", $username, time() + 3600);
header("Location: main.html");