<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">DETALLE   DE   REMISION</h1>
              
            </div>
        </div>
    </div>
</div>
<form>
  
<div class="card" bgcolor="red">
	<div class="card-body"> 
<form>
  

    <div class="modal-body row">
        <div class="col-md-2 mx-auto">
            <center><label>ID Remision:</label></center>
            <span class="form-control " ><?php echo $remision['id_remision'] ?></span>

        </div>
    </div>

    <div class="modal-body row">
        <div class="form-group col-md-4">
            <label>Numero Remision:</label>
            <span class="form-control " ><?php echo $remision['num_remi'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Fecha Remision:</label>
            <span class="form-control " ><?php echo $remision['fecha_remi'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Hora Envio:</label>
            <span class="form-control " ><?php echo $remision['hora_envio_remi'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Fecha Devolucion:</label>
            <span class="form-control " ><?php echo $remision['fecha_devo_remi'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Empresa:</label>
            <span class="form-control " ><?php echo $remision['empresa_remi'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Direccion:</label>
            <span class="form-control " ><?php echo $remision['direccion_remi'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Funcionario:</label>
            <span class="form-control " ><?php echo $remision['funcionario_remi'] ?></span>

        </div>

        <div class="form-group col-md-12">
            <center><label>Observaciones:</label></center>
            <textarea style="background: #fff;" readonly class="form-control " ><?php echo $remision['observacion_remi'] ?></textarea>
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
   

    <div class="row">
        <div class="form-group col-md-4">
            <a href="<?php echo getUrl("Remision", "Remision", "listar"); ?>"class="btn btn-danger">Atras</a> 

            <button id="botoncito" data-url="<?php echo getUrl("Remision","Remision","pdf",array("id_remision"=>$remision['id_remision']),"ajax")?>" type="button" class="btn btn-warning btn-info" data-toggle="modal" data-target="#exampleModal">
                    Ver PDF 
                </button>

        </div>
    </div>
</form>

</div>
</div>