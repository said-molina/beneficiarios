<?php

include('conexion.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $app = $_POST['app'];
  $query = "INSERT INTO civiles(nombre, app) VALUES ('$nombre', '$app')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>