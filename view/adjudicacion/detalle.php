<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">DETALLE   DE   ADJUDICACION</h1>
              
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
            <center><label>ID Adjudicacion:</label></center>
            <span class="form-control " ><?php echo $adjudicacion['id_adjudicacion'] ?></span>

        </div>
    </div>

    <div class="modal-body row">
        <div class="form-group col-md-4">
            <label>Numero Factura:</label>
            <span class="form-control " ><?php echo $adjudicacion['num_factura'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Fecha Entrega:</label>
            <span class="form-control " ><?php echo $adjudicacion['fecha_entrega'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Nombre:</label>
            <span class="form-control " ><?php echo $empleado['nombre_empleado'] ?></span>

        </div>

 

        <div class="form-group col-md-4">
            <label>Valor:</label>
            <span class="form-control " ><?php echo $adjudicacion['valor'] ?></span>

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
            <label>Proveedor:</label>
            <span class="form-control " ><?php echo $adjudicacion['nit'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Recibido:</label>
            <span class="form-control " ><?php echo $empleado1['nombre_empleado']  ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Entregado:</label>
            <span class="form-control " ><?php echo  $empleado2['nombre_empleado'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Copia:</label>
            <span class="form-control " ><?php echo $empleado3['nombre_empleado']  ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Contabilizado:</label>
            <span class="form-control " ><?php echo  $empleado4['nombre_empleado']  ?></span>

        </div>

        <div class="form-group col-md-12">
            <center><label>Observaciones:</label></center>
            <textarea style="background: #fff;" readonly class="form-control " ><?php echo $adjudicacion['observaciones'] ?></textarea>
        </div>

    


        <div class="form-group col-md-12">
            <center><b>INFORMACION DEL EQUIPO</b></center>
        </div>

        <div class="form-group col-md-4">
            <label>Id del Equipo:</label>
            <span class="form-control " ><?php echo $equipo['id'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Tipo de Equipo:</label>
            <span class="form-control " ><?php echo $equipo['desc_tipo_equipo'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Marca:</label>
            <span class="form-control " ><?php echo $equipo['desc_marca'] ?></span>
        </div>

        <div class="form-group col-md-12">
            <center><label>Descripcion del Equipo:</label></center>
            <textarea style="background: #fff; height:160px" readonly class="form-control " ><?php echo $equipo['desc_equipo'] ?></textarea>
        </div>

        <div class="form-group col-md-4">
            <label>Numero de intervenciones:</label>
            <span class="form-control " ><?php echo $equipo['num_intervencion'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Estado del Equipo:</label>
            <span class="form-control " ><?php echo $equipo['nombre_estado'] ?></span>
        </div>

        <div class="form-group col-md-4">
            <label>Serial</label>
            <span class="form-control " ><?php echo $equipo['serial'] ?></span>
        </div>
    </div>
   

    <div class="row">
        <div class="form-group col-md-4">
            <a href="<?php echo getUrl("Adjudicacion", "Adjudicacion", "listar"); ?>"class="btn btn-danger">Atras</a> 

            <button id="botoncito" data-url="<?php echo getUrl("Adjudicacion","Adjudicacion","pdf",array("id_adjudicacion"=>$adjudicacion['id_adjudicacion']),"ajax")?>" type="button" class="btn btn-warning btn-info" data-toggle="modal" data-target="#exampleModal">
                    Ver PDF 
                </button>

        </div>
    </div>
</form>
</div>
</div>