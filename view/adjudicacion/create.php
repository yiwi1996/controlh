<?php $resul ?>
<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR ADJUDICACION</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">
        <div style="display: none;" id="copia">
        <div class="row">   

            <div class="col-md-12 form-group " id="cop" style="display: none;">	

        </div>

            <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea2">Observaciones</label>
                    <textarea class="form-control rounded-0 exampleFormControlTextarea2" rows="3"  name="observaciones[]"></textarea>
            </div>
            <div class="col-md-2 form-group">
                <label>Agregar un nuevo serial</label>
            </div>  
            <div class="col-md-4 form-group">
                    <input type="text seri" name="serial[]"  class="form-control"  <?php for($i=2;$i<6;$i++){?> id="seri<?php echo $i ?>" <?php } ?> id="" data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax"); ?>">
                <div class="serie"></div>
            </div>

            <div class="form-group col-md-12">
                <button type="button" id="eliminar" class="btn btn-danger form-control">Eliminar</button>

            </div>

            </div>
        </div>


        <!-------------------------fin formulario copia--------------------------->

        <form action="<?php echo getUrl("Adjudicacion", "Adjudicacion", "postCreate"); ?>" method="post" >

            <div class="row" id="adjudicacion">

                <div class="col-md-6 form-group">	
                    <label>Fecha Entrega</label>
                    <input type="Date" name="fecha_entrega[]" class="form-control ">
                </div>

                <div class="col-md-6 form-group">
                    <label>Serial</label>
                        <input type="text" name="serial[]"  class="form-control" id="seri" data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax"); ?>">
                    <div id="serie"></div>
                </div>


                <div class="col-md-12 form-group " id="d1" style="display: none;">	

                </div>

                <div class="col-md-6 form-group">
                    <label>Cedula o Nombre: </label>
                    <input type="text" id="nombre2" placeholder="De Quien diligencia la adjudicacion"  name="nombre[]" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax"); ?>">

                    <div id="empleado"></div>
                </div>

                <div class="col-md-6 form-group">	
                    <label>Recibido</label>
                    <input type="text" id="recibo" placeholder="cedula o nombre de quien recibe"  name="recibido[]" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="recibido1"></div>
                </div>

                <div class="col-md-6 form-group">	
                    <label>Entrega</label>
                    <input type="text" id="entre" placeholder="cedula o nombre a quien se entrega" name="entregado[]" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="entrega1"></div>
                </div>

                <div class="col-md-6 form-group">	
                    <label>Copia</label>
                    <input type="text" id="cop" placeholder="cedula o nombre de quien recibe copia" name="copia[]"  class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="copia1"></div>
                </div>

                <div class="col-md-6 form-group">	
                    <label>Contabilizado</label>
                    <input type="text" id="contabi" placeholder="cedula o nombre de quien contabiliza" name="contabilizado[]" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="contabilizado1"></div>
                </div>

                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea2">Observaciones</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"  name="observaciones[]"></textarea>
                </div>

            <div class="col-md-2 form-group">
                <label>Agregar un nuevo serial</label>
            </div>  
            <div class="col-md-4 form-group">
                    <input type="text seri" name="serial[]"  class="form-control"  <?php for($i=2;$i<6;$i++){?> id="seri<?php echo $i ?>" <?php } ?> id="" data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax"); ?>">
                <div class="serie"></div>
            </div>

            </div>


            <div id="nuevo"></div>

            <div class="row">

                <div class="form-group col-md-12">
                    <button type="button" id="agregar" class="btn btn-primary form-control">Agregar</button>
                </div>
                <div id="boton4"  class="form-group col-md-12"></div>
            </div>

    </form>	
    </div>
</div>
    

