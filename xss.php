<?php

if (isset($_GET['name'])) {
  $name = $_GET['name'];
  echo "<p>Hello, $name!</p>";
}
?>