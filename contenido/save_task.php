<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $app = $_POST['app'];
  $apm = $_POST['apm'];
  $direccion = $_POST['direccion'];
  $ine = $_POST['ine'];
  $nacimiento = $_POST['nacimiento'];
  $email = $_POST['email'];
  $query = "INSERT INTO civiles(nombre, app, apm, direccion, ine, nacimiento, email) VALUES ('$nombre', '$app','$apm', '$direccion', '$ine', '$nacimiento', '$email')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: rb.php');

}

?>