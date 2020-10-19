<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'apoyos'
) or die(mysqli_erro($mysqli));

?>
