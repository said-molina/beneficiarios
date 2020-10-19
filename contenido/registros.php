<?php
include '../complementos/cabeza.php';
include '../complementos/menuladoo.php'; 
include '../modal/modalregistros.php';
include'db.php'; 

 ?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Registro beneficiarios</h1>

          <div class="container-fluid">

          <!-- Page Heading -->
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Fecha de creacion</th>
                      <th>actions</th>
                    </tr>
                  </tfoot>
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
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php 
include '../complementos/pies.php';
 ?>