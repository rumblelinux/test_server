<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctf";
$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "Username already exists.";
  exit;
}
$password = $_POST['password'];
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$conn->query($sql);

header("Location: login.html");