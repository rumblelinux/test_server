<?php

if (isset($_COOKIE['username'])) {
  $username = $_COOKIE['username'];

  $conn = new mysqli("localhost", "username", "password", "sqli_ctf");
  $stmt = $conn->prepare("SELECT * FROM comments WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  echo "<h2>Chào mừng, $username!</h2>";
  echo "<ul>";
  while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['comment'] . "</li>";
  }
  echo "</ul>";

  $stmt->close();
  $conn->close();
} else {
  header("Location: login.html");
}
?>