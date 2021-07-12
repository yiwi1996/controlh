<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR PROVEEDOR</h1>
              
            </div>
        </div>
    </div>
</div>
<div class="card" bgcolor="red">
	<div class="card-body">
    <form action="<?php echo getUrl("Proveedor", "Proveedor", "postCreate"); ?>" method="post" >
		<div class="row" id="proveedor">

			<div class="col-md-6 form-group">	
				<label>NIT</label>
				<input type="text" name="nit" id="pro"class="form-control ">
				<div id="proveedor"></div>
			</div>
				
			<div class="col-md-6 form-group">	
				<label>Nombre</label>
				<input type="text" name="nombre"  class="form-control ">
			</div>

            <div class="col-md-6 form-group">	
				<label>Direccion</label>
				<input type="text" name="direccion" class="form-control ">
			</div>

			<div class="col-md-6 form-group">	
				<label>Telefono</label>
				<input type="text" name="telefono" class="form-control ">
			</div>

			<div class="col-md-6 form-group">	
				<label>Contacto</label>
				<input type="text" name="contacto" class="form-control ">
			</div>
				
			<div class="col-md-6 form-group">	
				<label>Barrio</label>
				<input type="text" name="barrio" class="form-control ">
			</div>

            <div class="col-md-6 form-group">	
				<label>Ciudad</label>
				<input type="text" name="ciudad" class="form-control ">
			</div>

			<div id="boton7"  class="form-group col-md-12">
			
			</div>
		</div>
	</form>	
	</div>
</div>
 
