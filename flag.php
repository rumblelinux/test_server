<?php
session_start();

if (isset($_SESSION['username'])) {
  echo '<h1>YOU_GOT_ME</h1>';
} else {
  header("Location: login.php");
  exit;
}
?>