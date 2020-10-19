<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cerrar</h4>
        </div>
        <div class="modal-body">
          <div class="container">
  <h2>Datos del Solicitante</h2>
  <form action="savebene.php" method="POST">
    <div class="form-group">
      <label for="email">Nombre:</label>
      <input type="text" class="form-control" id="name" placeholder="" name="nombre">
    </div>
    <div class="form-group">
      <label for="email">Apellido Paterno:</label>
      <input type="text" class="form-control" id="email" placeholder="" name="app">
    </div>
    <div class="form-group">
      <label for="email">Apellido Materno:</label>
      <input type="text" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
      <label for="email">Direccion:</label>
      <input type="text" class="form-control" id="email" placeholder="" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">INE:</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="pswd">
    </div>
    <div class="form-group">
      <label for="email">Fecha de Nacimiento:</label>
      <input type="date" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
