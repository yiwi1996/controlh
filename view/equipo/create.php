<div class="container" style="margin-top: 2%">
<div class="card-header bg-info text-white ">
    <div class="page-inner py-4">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h1 class="text-white pb-2 fw-bold">REGISTRAR EQUIPO</h1>
              
            </div>
        </div>
    </div>
</div>

<div class="card" bgcolor="red">
	<div class="card-body">

    <form action="<?php echo getUrl("Equipo", "Equipo", "postCreate"); ?>" method="post" >
		<div class="row" id="equipo">

			<div class="form-group col-md-6">
					<label>Tipo equipo</label>
					<select name="TipoEquipo" id="tipo" class="form-control">
						<option value="">Seleccione...</option>
						<?php  
						while ($equi=mysqli_fetch_assoc($tipo)) {
							echo "<option value='".$equi['id']."'>".$equi['desc_tipo_equipo']."</option>";
						}
						?>
					</select>
					<div id="equipo1"></div>
			</div>

			<div class="col-md-6 form-group">	
					<label>Numero de Factura</label>
					<input type="text" name="num_factura" class="form-control ">
			</div>

			<div class="col-md-6 form-group">	
				<label>Serial</label>
				<input data-url="<?= getUrl("Equipo", "Equipo", "valida", false, "ajax");?>" type="text" name="Serial" id="seri" class="form-control consul">
				<div id="serial"></div>
			</div>

			<div class="col-md-6 form-group">	
				<label>Activo Fijo</label>
				<input type="number" name="ActivoFijo" id="activo" class="form-control ">
				<div id="fijo"></div>
			</div>

			<div class="col-md-6 form-group">	
				<label>Descripcion de Equipo</label>
				<input type="text" name="DescripcionEquipo" id="descripcion" class="form-control ">
				<div id="descripci"></div>
			</div>

            <div class="col-md-6 form-group">	
				<label>Caracteristicas Generales</label>
				<input type="text" name="CaracteristicasGenerales" id="caracter" class="form-control ">
				<div id="caracteristicas"></div>
			</div>

			<div class="col-md-6 form-group balanza" style="display: none;">
					<label>Numero NII</label>
					<input type="text" name="numero_nii" class="form-control ">
			</div>

			<div class="col-md-6 form-group  balanza" style="display: none;">
					<label>Fecha Verificacion</label>
					<input type="Date" name="fecha_verificacion" class="form-control ">
			</div>

			<div class="col-md-6 form-group  balanza"  style="display: none;">
					<label>Codigo</label>
					<input type="text" name="cod_oavm" class="form-control ">
			</div>

			<div class="col-md-6 form-group vehiculo" style="display: none;">
					<label>Numero Soat</label>
					<input type="text" name="soat" class="form-control">
			</div>

			<div class="col-md-6 form-group vehiculo" style="display: none;">
					<label>Fecha Vencimiento Soat</label>
					<input type="Date" name="fecha_venci_soat" class="form-control">
			</div>

			<div class="col-md-6 form-group vehiculo" style="display: none;">
					<label>Numero Tecnomecanica</label>
					<input type="text" name="tecnomecanica" class="form-control">
			</div>

			<div class="col-md-6 form-group vehiculo" style="display: none;">
					<label>Fecha Vencimiento Tecnomecanica</label>
					<input type="Date" name="fecha_venci_tecnomeca" class="form-control">
			</div>

			<div class="col-md-6 form-group">	
				<label>Accesorios</label>
				<input type="text" name="Accesorios" id="acce" class="form-control ">
				<div id="accesorio"></div>
			</div>

            <div class="col-md-6 form-group">	
				<label>Usuario</label>
				<input type="text" name="Usuario" id="usuar" class="form-control ">
				<div id="usuario"></div>
			</div>

            <div class="col-md-6 form-group">	
				<label>Fecha de Compra</label>
				<input type="Date" name="Fecha_de_Compra"  class="form-control ">
			</div>

			<div class="col-md-6 form-group">	
				<label>Garantia Meses</label>
				<input type="text" name="Garantia" id="mes" class="form-control ">
				<div id="garantia"></div>
			</div>

            <div class="col-md-6 form-group">	
				<label>Valor</label>
				<input type="number" name="Valor" id="val" class="form-control ">
				<div id="valor"></div>
			</div>  

			<div class="form-group col-md-6">
				<label>Estado</label>
				<select name="Estado" id="esta" class="form-control">
					<option value="">Seleccione...</option>
					<?php  
					while ($es=mysqli_fetch_assoc($estado)) {
						echo "<option value='".$es['id_estado']."'>".$es['nombre_estado']."</option>";
					}
					?>
				</select>
				<div id="estado"></div>
			</div>

			<div class="form-group col-md-6 compu"  style="display: none;">
				<label>Sistema operativo</label>
				<select name="SistemaOperativo"  id="sistema" class="form-control">
				
					<option value="">Seleccione...</option>
					<?php  
					while ($sis=mysqli_fetch_assoc($sistema)) {
						echo "<option value='".$sis['id_sis_operativo']."'>".$sis['desc_operativo']."</option>";
					}
					?>
				</select>
				<div id="operativo"></div>
			</div>	

			<div class="form-group col-md-6" id="sitem" style="display: none;">
			
			<label id="sist">Licencia de Windows</label> 
			<input type="text" name="licencia_sistema" id="sist" class="form-control ">

			<div  id="licencia"></div>
			</div>
			

			<div  id="office"  class="form-group col-md-6" style="display: none;">
			<label>Paquete Office</label>
				<select name="office"  id="office1" class="form-control">
				
					<option value="">Seleccione...</option>
					<?php  
					while ($off=mysqli_fetch_assoc($office)) {
						echo "<option value='".$off['id_office']."'>".$off['desc_office']."</option>";
					}
					?>
				</select>
				<div id="paquete"></div>
			</div>
			
			<div class="form-group col-md-6" style="display: none;"  id="licencia_office">
			
			<label>Licencia Office</label>
				<input type="text" name="office_lince" id="office1" class="form-control ">
				<div id="office2"></div>

			</div>

			<div  id="antivirus"  class="form-group col-md-6" style="display: none;">
			<label>Antivirus</label>
				<select name="antivirus"  id="antivirus" class="form-control">
				
					<option value="">Seleccione...</option>
					<?php  
					while ($anti=mysqli_fetch_assoc($antivirus)) {
						echo "<option value='".$anti['id_antivirus']."'>".$anti['desc_antivirus']."</option>";
					}
					?>
				</select>
			</div>

			<div class="form-group col-md-6" style="display: none;"  id="licencia_antivirus">
			
			<label>Licencia Antivirus</label>
				<input type="text" name="antivirus_lince" id="antivirus1" class="form-control ">
				<div id="antivirus2"></div>

			</div>

			<div class="form-group col-md-6">
				<label>Centro de Operacion</label>
				<select name="CentroOperacion" id="centro" class="form-control" id="co">
				
					<option value="">Seleccione...</option>
					<?php  
					while ($co=mysqli_fetch_assoc($centro)) {
						echo "<option value='".$co['id']."'>".$co['desc_co']."</option>";
					}
					?>
				</select>
				<div id="operacion"></div>
			</div>

			<div class="form-group col-md-6">
				<label>Marca</label>
				<select name="Marca" id="marc" class="form-control" id="mar">
					<option value="">Seleccione...</option>
					<?php  
					while ($marcas=mysqli_fetch_assoc($marca)) {
						echo "<option value='".$marcas['id']."'>".$marcas['desc_marca']."</option>";
					}
					?>
				</select>
				<div id="marca"></div>
			</div>

			<div class="form-group col-md-6">
				<label>Proveedor</label>
				<select name="Nit" id="prove" class="form-control" id="ni">
					<option value="">Seleccione...</option>
					<?php  
					while ($ni=mysqli_fetch_assoc($Nit)) {
						echo "<option value='".$ni['nit']."'>".$ni['nombre']."</option>";
					}
					?>
				</select>
				<div id="proveedor"></div>
			</div>
			
			<div id="boton1"  class="form-group col-md-12">
			
			</div>
		</div>
	</form>	
	</div>
</div>
 
