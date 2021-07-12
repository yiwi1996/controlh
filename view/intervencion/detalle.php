<div class="modal-header" style="width: 100% ;">
    <h5 class="modal-title" id="exampleModalLabel">Detalle de Intervencion</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form>
  

  <div class="modal-body row">
        <div class="col-md-6 mx-auto">
            <center><label>ID Intervencion:</label></center>
            <span class="form-control " ><?php echo $intervencion['id_intervencion'] ?></span>

        </div>
    </div>

    <div class="modal-body row">
        <div class="form-group col-md-4">
            <label>Fecha de la Intervencion:</label>
            <span class="form-control " ><?php echo $intervencion['fecha_inter'] ?></span>
        </div>

        <?php if($intervencion['pre_inter']==1){ ?>
        <div class="form-group col-md-4">
            <label>Tipo intervencion:</label>
            <span class="form-control " >Preventivo</span>
        </div>
        <?php } ?>
        <?php if($intervencion['corr_inter']==1){ ?>
        <div class="form-group col-md-4">
            <label>Tipo intervencion:</label>
            <span class="form-control " >Correctivo</span>
        </div>
        <?php } ?>

        <div class="form-group col-md-4">
            <label>Rializado por:</label>
            <span class="form-control " ><?php echo $intervencion['realizado_inter'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Serial Equipo:</label>
            <span class="form-control " ><?php echo $intervencion['serial_inter'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Activo Equipo:</label>
            <span class="form-control " ><?php echo $intervencion['activo_inter'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Valor de la Intervencion:</label>
            <span class="form-control " ><?php echo $intervencion['valor_inter'] ?></span>
        </div>

        <div class="form-group col-md-12">
            <center><label>Detalle de la Intervencion:</label></center>
            <span class="form-control " ><?php echo $intervencion['detalle_inter'] ?></span>
        </div>

        <div class="form-group col-md-12">
            <center><b>INFORMACION DEL EQUIPO</b></center>
        </div>

        <div class="form-group col-md-4">
            <label>Id del Equipo:</label>
            <span class="form-control " ><?php echo $equi['id'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Tipo de Equipo:</label>
            <span class="form-control " ><?php echo $equi['desc_tipo_equipo'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Marca:</label>
            <span class="form-control " ><?php echo $equi['desc_marca'] ?></span>
        </div>

        <div class="form-group col-md-12">
            <center><label>Descripcion del Equipo:</label></center>
            <textarea style="background: #fff; height:160px" readonly class="form-control " ><?php echo $equi['desc_equipo'] ?></textarea>
        </div>

        <div class="form-group col-md-4">
            <label>Numero de intervenciones:</label>
            <span class="form-control " ><?php echo $equi['num_intervencion'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Estado del Equipo:</label>
            <span class="form-control " ><?php echo $equi['nombre_estado'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Serial</label>
            <span class="form-control " ><?php echo $equi['serial'] ?></span>
        </div>

        
        
    </div>
      
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
    </div>
</form>