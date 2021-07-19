<?php $resul ?>
<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
<div class="page-inner py-4">
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
<div>
<h1 class="text-white pb-2 fw-bold">REGISTRAR BAJA EQUIPO</h1>

</div>
</div>
</div>
</div>

<div class="card" bgcolor="red">
    <div class="card-body">
        <form action="<?php echo getUrl("BajaEquipo", "BajaEquipo", "postCreate"); ?>" method="post" >
        <div style="display: none;" id="copia">
        <div class="row">   

            <div class="col-md-12 form-group " id="cop" style="display: none;">	

        </div>
            <div class="form-group col-md-12">
                <button type="button" id="eliminar" class="btn btn-danger form-control">Eliminar</button>

            </div>
            <div class="col-md-2 form-group">
                <label>Agregar un nuevo serial</label>
            </div>  
            
            <div class="col-md-4 form-group">
                    <input type="text seri" name="serial_baja[]"  class="form-control"  <?php for($i=2;$i<6;$i++){?> id="seri<?php echo $i ?>" <?php } ?> id="" data-url="<?= getUrl("BajaEquipo", "BajaEquipo", "equipo", false, "ajax"); ?>">
                <div class="serie"></div>
            </div>

        

           

            </div>
        </div>

        <div class="row" id="baja">

        <div class="col-md-4 form-group">
            <label for="fecha_baja">fecha baja</label>
            <input type="date" name="fecha_baja" id="fecha_baja" class="form-control">
        </div>

       

        <div class="col-md-4 form-group">
            <label>Serial</label>

            <input type="text" name="serial_baja[]"  class="form-control" id="seri" placeholder="XXXX-XXXX-XXXX" data-url="<?= getUrl("BajaEquipo", "BajaEquipo", "equipo", false, "ajax"); ?>">
            <div id="serie"></div>
        </div>


        <div class="col-md-12 form-group " id="d1" style="display: none;"></div>

        <div class="col-md-3 form-group">
                    <label>Validado por : </label>
                    <input type="text" id="nombre2" placeholder="De Quien diligencia la adjudicacion"  name="validado_baja" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax"); ?>">

                    <div id="empleado"></div>
                </div>

                <div class="col-md-3 form-group">	
                    <label>Elaborado por :</label>
                    <input type="text" id="recibo" placeholder="cedula o nombre de quien recibe"  name="elaborado_baja" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="recibido1"></div>
                </div>

                <div class="col-md-3 form-group">	
                    <label>Autorizado por :</label>
                    <input type="text" id="entre" placeholder="cedula o nombre a quien se entrega" name="autorizado_baja" class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="entrega1"></div>
                </div>

                <div class="col-md-3 form-group">	
                    <label>Contabilizado por :</label>
                    <input type="text" id="cop" placeholder="cedula o nombre de quien recibe copia" name="contabilizado_baja"  class="form-control "data-url="<?= getUrl("Adjudicacion", "Adjudicacion", "equipo", false, "ajax");?>">
                    <div id="copia1"></div>
                </div>


        <div class="col-md-12 form-group">

            <label for="asunto_baja">Asunto baja</label>

            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"  name="asunto_baja"></textarea>
        </div>

        
        <label>Agregar un nuevo serial</label>
        <div class="col-md-4 form-group">

                    <input type="text seri" name="serial_baja[]"  class="form-control"  <?php for($i=2;$i<6;$i++){?> id="seri<?php echo $i ?>" <?php } ?> id="" data-url="<?= getUrl("BajaEquipo", "BajaEquipo", "equipo", false, "ajax"); ?>">
                <div class="serie"></div>
        </div>

        

        
    </div>
        <!-- <div id="boton4"  class="form-group col-md-12"></div>
        </div> -->
        <div class="row">
        <div id="nuevo" class="form-group col-md-12"></div>

            <div class="form-group col-md-12">
                <button type="button" id="agregar" class="btn btn-primary form-control">Agregar</button>
            </div>
            <div id="boton4"  class="form-group col-md-12"></div>
        </div>
        <div class="col-md-12">
            <input type="submit" value="Guardar" class="btn btn-success">
        </div>
        </form>


    </div>
</div>