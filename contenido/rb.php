<?php
include '../complementos/cabeza.php';
include '../complementos/menuladoo.php'; 
include '../modal/modalrb.php';
include 'db.php'

 ?>

        
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Registro beneficiarios</h1>

          <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

<div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="app" class="form-control" placeholder="Apellido Paterno" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apm" class="form-control" placeholder="Apellido Materno" autofocus>
          </div>
          <div class="form-group">
            <textarea name="direccion"  class="form-control" placeholder="Direccion"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="ine" class="form-control" placeholder="INE" autofocus>
          </div>
          <div class="form-group">
            <label for="nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="nacimiento" class="form-control" placeholder="Fecha de Nacimiento" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Correo Electronico" autofocus>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Direccion</th>
            <th>INE</th>
            <th>Fecha de Nacimiento</th>
            <th>Correo Electronico</th>
            <th>Fecha de Creacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM civiles";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['app']; ?></td>
            <td><?php echo $row['apm']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['ine']; ?></td>
            <td><?php echo $row['nacimiento']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['creado']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


          <!-- Page Heading -->
          

          <div class="container-fluid">
            
          </div>


          <!-- Page Heading -->
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php 
include '../complementos/pies.php';
 ?>