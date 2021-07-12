<?php $resul ?>
<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR REMISION</h1>
              
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
           
            <div class="col-md-2 form-group">
                <label>Agregar un nuevo serial</label>
            </div>  
            <div class="col-md-4 form-group">
                    <input type="text seri" name="serie[]"class="form-control"  <?php for($i=2;$i<6;$i++){?>id="seri<?php echo $i ?>" <?php } ?> id="" data-url="<?=getUrl("Remision", "Remision", "equipo", false,"ajax"); ?>">
                <div class="serie"></div>
            </div>

            <div class="form-group col-md-12">
                <button type="button" id="eliminar" class="btn btn-danger form-control">Eliminar</button>

            </div>

            </div>
        </div>

<!--------------------------Fin de la Copia------------------------------->
    <form action="<?php echo getUrl("Remision", "Remision", "postCreate"); ?>" method="post" >
		<div class="row" id="remision">
			<div class="col-md-4 form-group">	
				<label>Numero Remision</label>
				<input type="number" name="numero" readonly  $obj=new RemisionModel(); class="form-control "
					value="<?php echo $id_remision=$obj->autoincrement("remision","id_remision");?>"
				>
			</div>

			<div class="col-md-4 form-group">	
				<label>Fecha Remision</label>
				<input type="Date" name="Fecha" class="form-control " value="<?php  echo $fecha_hoy = date('Y-m-d'); ?>">
			</div>

			<div class="col-md-4 form-group">	
				<label>Hora Envio</label>
				<input type="time" name="hora" class="form-control " value="<?php $hora = new DateTime("now", new DateTimeZone('America/Bogota'));
				echo $hora->format('G:H:s');?>">
			</div>

			<div class="col-md-4 form-group">	
				<label>Temporal</label>
				<input type="checkbox" name="temporal" id="tempo"  class="form-control ">
			</div>

			<div class="col-md-4 form-group">	
				<label>Definitivo</label>
				<input type="checkbox" name="definitivo" id="defi"  class="form-control ">
			</div>

			<div class="col-md-4 form-group" id="devolucion" style="display: none;">	
				<label>Fecha Devolucion</label>
				<input type="Date" name="fecha_devo" class="form-control ">
			</div>

            <div class="col-md-4 form-group">	
				<label>Empresa</label>
				<input type="text" name="empresa" id="empres" class="form-control ">
				<div id="empresa"></div>
			</div>

            <div class="col-md-4 form-group">	
				<label>Direccion</label>
				<input type="text" name="direccion" id="direcci" class="form-control ">
				<div id="direccion"></div>
			</div>

			<div class="col-md-4 form-group">	
				<label>Funcionario</label>
				<input type="text" name="funcionario" id="funciona" class="form-control ">
				<div id="funcionario"></div>
			</div>

			<div class="col-md-4 form-group">	
                    <label>Serial</label>
                        <input type="text" name="serie[]"  class="form-control" id="seri" data-url="<?= getUrl("Remision", "Remision", "equipo", false, "ajax"); ?>">
                    <div id="serie"></div>
            </div>

			<div class="col-md-12 form-group " id="d1" style="display: none;">	
				
			</div>

			<div class="form-group col-md-4">
				<label>Estado</label>
				<select name="estado" class="form-control" >
					<option value="">Seleccione...</option>
					<?php  
						echo $esta;
					?>
				</select>
			</div>

			<div class="form-group col-md-4">
				<label>Despachado Por:</label>
				<select name="despachado" id="despa" class="form-control" >
					<option value="">Seleccione...</option>
					<?php  
					while ($despa=mysqli_fetch_assoc($despachado)) {
						echo "<option value='".$despa['id_despachado']."'>".$despa['nombre_despa']."</option>";
					}
					?>
				</select>
				<div id="despachado"></div>
			</div>

			<div class="form-group col-md-4">
				<label>Transportado Por:</label>
				<select name="transportado" id="transpor" class="form-control" >
					<option value="">Seleccione...</option>
					<?php  
					while ($trans=mysqli_fetch_assoc($transportado)) {
						echo "<option value='".$trans['id_transportado']."'>".$trans['nombre_transpor']."</option>";
					}
					?>
				</select>
				<div id="transportado"></div>
			</div>

			<div class="form-group col-md-4">
				<label>Motivo</label>
				<select name="motivo" id="motiv" class="form-control" >
					<option value="">Seleccione...</option>
					<?php  
						echo $moti;
					?>
				</select>
				<div id="motivo"></div>
			</div>

			<div class="form-group col-md-4">
				<label>Area</label>
				<select name="area" id="are" class="form-control" >
					<option value="">Seleccione...</option>
					<?php  
					while ($ar=mysqli_fetch_assoc($area)) {
						echo "<option value='".$ar['id_area']."'>".$ar['nombre_area']."</option>";
					}
					?>
				</select>
				<div id="area"></div>
			</div>

			<div class="form-group col-md-4">
				<label>Departamento</label>
				<select name="depto" id="depto"  data-url="<?= getUrl("Remision", "Remision", "ciudad", false, "ajax"); ?>"class="form-control">
				
					<option value="">Seleccione...</option>
					<?php  
					while ($dep=mysqli_fetch_assoc($departamento)) {
						echo "<option value='".$dep['dep_id']."'>".$dep['dep_nombre']."</option>";
					}
					?>
				</select>
				<div id="depart"></div>
			</div>

			<div class="form-group col-md-4">
				<label>Ciudad</label>
				<select name="ciudad"  id="ciudad" class="form-control">
				
					<option value="">Seleccione...</option>
					
				</select>
				<div id="ciudad_1"></div>
			</div>	

			<div class="form-group col-md-12">
				<label for="exampleFormControlTextarea2">Observacion</label>
				<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"  name="observacion"></textarea>
			</div>

			<div class="col-md-2 form-group">
                <label>Agregar un nuevo serial</label>
            </div>  
            <div class="col-md-4 form-group">
                    <input type="text seri" name="serie[]"  class="form-control"  <?php for($i=2;$i<6;$i++){?> id="seri<?php echo $i ?>" <?php } ?> id="" data-url="<?= getUrl("Remision", "Remision", "equipo", false, "ajax"); ?>">
                <div class="serie"></div>
            </div>
			</div>

			<div id="nuevo"></div>

			<div class="row">

				<div class="form-group col-md-12">
                    <button type="button" id="agregar" class="btn btn-primary form-control">Agregar</button>
                </div>

				</div>
			</div>
			<div class="col-md-12">
            <input type="submit" value="Guardar" class="btn btn-success">
        </div>

	</form>	
	</div>
</div>
 
