<?php
include("db.php");
$nombre = '';
$app= '';
$apm= '';
$direccion= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM civiles WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $app = $row['app'];
    $apm = $row['apm'];
    $direccion = $row['direccion'];
    $ine = $row['ine'];
    $nacimiento = $row['nacimiento'];
    $email = $row['email'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $app = $_POST['app'];
  $apm = $_POST['apm'];
  $direccion = $_POST['direccion'];
  $ine = $_POST['ine'];
  $nacimiento = $_POST['nacimiento'];
  $email= $_POST['email'];

  $query = "UPDATE civiles set nombre = '$nombre', app = '$app', apm = '$apm', direccion = '$direccion', ine = '$ine', nacimiento = '$nacimiento', email = '$email' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Datos Actualizados Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: rb.php');
}

?>
<?php include('../complementos/cabeza.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="app" class="form-control" cols="30" rows="10"><?php echo $app;?></textarea>
        </div>
        <div class="form-group">
          <input name="apm" type="text" class="form-control" value="<?php echo $apm; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="ine" type="text" class="form-control" value="<?php echo $ine; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="nacimiento" type="text" class="form-control" value="<?php echo $nacimiento; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Update Title">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('../complementos/pies.php'); ?>