<div class="modal-header" style="width: 100% ;">
    <h5 class="modal-title" id="exampleModalLabel">Detalle de Proveedor</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form>
  

  <div class="modal-body row">
        <div class="col-md-6 mx-auto">
            <center><label>Nit:</label></center>
            <span class="form-control " ><?php echo $proveedo['nit'] ?></span>
        </div>
    </div>

    <div class="modal-body row">
        <div class="form-group col-md-4">
            <label>Nombre:</label>
            <span class="form-control " ><?php echo $proveedo['nombre'] ?></span>
        </div>


        <div class="form-group col-md-4">
            <label>Contacto:</label>
            <span class="form-control " ><?php echo $proveedo['contacto'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Telefono:</label>
            <span class="form-control " ><?php echo $proveedo['telefono'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Direccion:</label>
            <span class="form-control " ><?php echo $proveedo['direccion'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Barrio:</label>
            <span class="form-control " ><?php echo $proveedo['barrio'] ?></span>
        </div>
      
        <div class="form-group col-md-4">
            <label>Ciudad:</label>
            <span class="form-control " ><?php echo $proveedo['ciudad'] ?></span>
        </div>
        
        
    </div>
      
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
    </div>
</form>