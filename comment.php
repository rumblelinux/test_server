<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctf";
$conn = new mysqli($servername, $username, $password, $dbname);

$comment = $_POST['comment'];

$comment = htmlspecialchars($comment);

$sql = "INSERT INTO comments (comment) VALUES ('$comment')";
$conn->query($sql);
header("Location: main.html");