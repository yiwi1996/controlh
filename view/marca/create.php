<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR MARCA</h1>
              
            </div>
        </div>
    </div>
</div>
<div class="card" bgcolor="red">
	<div class="card-body">

    <form action="<?php echo getUrl("Marca", "Marca", "postCreate"); ?>" method="post" >
		<div class="row" id="marca">

		<div class="col-md-6 form-group">	
			<label>Nombre De Marca</label>
			<input type="text" name="desc_marca" id="descri" class="form-control ">
            <div id="marca"></div>
		</div>

			<div id="boton3"  class="form-group col-md-12">
			
			</div>
		</div>
	</form>	
	</div>
</div>
</div>