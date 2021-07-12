<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR EMPLEADO</h1>
              
            </div>
        </div>
    </div>
</div>
<div class="card" bgcolor="red">
	<div class="card-body">
    <form action="<?php echo getUrl("Empleado", "Empleado", "postCreate"); ?>" method="post" >
		<div class="row" id="empleado">

			<div class="col-md-6 form-group">	
				<label>Numero de Cedula</label>
				<input type="text" name="cedula" class="form-control ">
			</div>
				
			<div class="col-md-6 form-group">	
				<label>Nombre Completo</label>
				<input type="text" name="nombre" id="nom" class="form-control ">
				<div id="nombre"></div>
			</div>

            <div class="col-md-6 form-group">	
				<label>Cargo</label>
				<input type="text" name="cargo_empleado" class="form-control ">
			</div>

			<div class="col-md-6 form-group">	
				<label>Area</label>
				<input type="text" name="area" class="form-control ">
			</div>

			<div class="col-md-6 form-group">	
				<label>Celular</label>
				<input type="text" name="celular" class="form-control ">
			</div>
				
			<div class="col-md-6 form-group">	
				<label>Direccion</label>
				<input type="text" name="direccion" class="form-control ">
			</div>

			<div id="boton5"  class="form-group col-md-12">
			
			</div>
		</div>
	</form>	
	</div>
</div>
 
