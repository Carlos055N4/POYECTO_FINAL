<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '1234',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
