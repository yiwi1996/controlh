<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">DETALLE   DE   BAJA EQUIPO</h1>
              
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
            <center><label>ID Baja Equipo:</label></center>
            <span class="form-control " ><?php echo $bajaEqui['id_baja'] ?></span>

        </div>
    </div>

    <div class="modal-body row">
        <div class="form-group col-md-4">
            <label>Numero Factura:</label>
            <span class="form-control " ><?php echo $bajaEqui['num_factura'] ?></span>

        </div>

        <div class="form-group col-md-4">
            <label>Fecha:</label>
            <span class="form-control " ><?php echo $bajaEqui['fecha_baja'] ?></span>

        </div>

         <div class="form-group col-md-4">
            <label>Valor:</label>
            <span class="form-control " ><?php echo $bajaEqui['valor'] ?></span>

        </div>


        <div class="form-group col-md-3">
            <label>Validado por:</label>
            <span class="form-control " ><?php echo $validado_baja ?></span>

        </div>

        <div class="form-group col-md-3">
            <label>Elaborado por:</label>
            <span class="form-control " ><?php echo $elaborado_baja ?></span>

        </div>

        <div class="form-group col-md-3">
            <label>Autorizado por:</label>
            <span class="form-control " ><?php echo $autorizado_baja ?></span>

        </div>

        <div class="form-group col-md-3">
            <label>Contabilizado por:</label>
            <span class="form-control " ><?php echo $contabilizado_baja ?></span>

        </div>

        <div class="form-group col-md-12">
            <center><label>Asunto:</label></center>
            <textarea style="background: #fff;" readonly class="form-control " ><?php echo $bajaEqui['asunto_baja'] ?></textarea>
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
            <a href="<?php echo getUrl("BajaEquipo", "BajaEquipo", "listar"); ?>"class="btn btn-danger">Atras</a> 

            <button id="botoncito" data-url="<?php echo getUrl("BajaEquipo","BajaEquipo","pdf",array("id_baja"=>$bajaEqui['id_baja']),"ajax")?>" type="button" class="btn btn-warning btn-info" data-toggle="modal" data-target="#exampleModal">
                    Ver PDF 
                </button>

        </div>
    </div>
</form>
</div>
</div>