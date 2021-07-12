<div class="modal-header" style="width: 100% ;">
    <h5 class="modal-title" id="exampleModalLabel">Detalle de Empleado</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form>
  

  <div class="modal-body row">
        <div class="col-md-6 mx-auto">
            <center><label>ID Empleado:</label></center>
            <span class="form-control " ><?php echo $empleado['id_empleado'] ?></span>
        </div>
    </div>

    <div class="modal-body row">

        <div class="form-group col-md-4">
            <label>Cedula:</label>
            <span class="form-control " ><?php echo $empleado['cedula_emplea'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Nombre Completo:</label>
            <span class="form-control " ><?php echo $empleado['nombre_empleado'] ?></span>
        </div>


        <div class="form-group col-md-4">
            <label>Cargo:</label>
            <span class="form-control " ><?php echo $empleado['cargo_empleado'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Area:</label>
            <span class="form-control " ><?php echo $empleado['area'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Celular:</label>
            <span class="form-control " ><?php echo $empleado['celular'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Direccion:</label>
            <span class="form-control " ><?php echo $empleado['direccion_emplea'] ?></span>
        </div>
        
        
    </div>
      
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
    </div>
</form>