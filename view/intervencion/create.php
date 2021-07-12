<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR INTERVENCION</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">
    <form action="<?php echo getUrl("Intervencion", "Intervencion", "postCreate"); ?>" method="post" >
		<div class="row" id="intervencion">

		<div class="col-md-6 form-group">	
				<label>Fecha Intervencion</label>
				<input type="Date" name="fecha" id="fech"  class="form-control ">
				<div id="fecha"></div>	
			</div>

			<div class="col-md-6 form-group">	
				<label>Serial</label>
				<input type="text" name="serial" id="seri" class="form-control" data-url="<?= getUrl("Intervencion", "Intervencion", "equipo", false, "ajax"); ?>">	
			</div>

			<div class="col-md-12 form-group " id="d2" style="display: none;">	
				
			</div>
			<div class="col-md-6 form-group">	
				<label>Detalle Intervencion</label>
				<input type="text" require name="detalle" id="detalle"  class="form-control ">
				<div id="Mensaje"></div>
			</div>

            <div class="col-md-6 form-group">	
				<label>Realizado</label>
				<input type="text" name="realizado" id="real"  class="form-control ">
				<div id="realizado"></div>
			</div>

			<div class="col-md-6 form-group">	
				<label>valor</label>
				<input type="number" name="valor" id="valor"  class="form-control ">
				<div id="val"></div>
			</div>
				
			<div class="col-md-3 form-group">	
				<label>preventivo</label>
				<input type="checkbox" name="pre" id="pre"  class="form-control ">
			</div>

			<div class="col-md-3 form-group">	
				<label>correctivo</label>
				<input type="checkbox" name="corr" id="corr"  class="form-control ">
			</div>

			<div id="boton"  class="form-group col-md-12">
			
			</div>
		</div>
	</form>	
	</div>
</div>
