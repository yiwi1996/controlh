<li class="nav-item">
	<a data-toggle="collapse" href="#submenu4">
	<i class="fas fa-clipboard-list"></i>
		<p>Adjudicacion</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu4">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Adjudicacion","Adjudicacion","getCreate"); ?>">
								<span class="sub-item">Registrar Adjudicacion</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Adjudicacion", "Adjudicacion", "listar"); ?>">
							<span class="sub-item">Consultar Adjudicacion</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu6">
	<i class="fas fa-window-close"></i>
		<p>Bajas de Activos</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu6">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("BajaEquipo","BajaEquipo","getCreate"); ?>">
								<span class="sub-item">Registrar Baja Activo</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("BajaEquipo", "BajaEquipo", "listar"); ?>">
							<span class="sub-item">Consultar Baja Activo</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu5">
		<i class="far fa-address-card"></i>
		<p>Empleado</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu5">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Empleado","Empleado","getCreate"); ?>">
								<span class="sub-item">Registrar Empleado</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Empleado", "Empleado", "listar"); ?>">
							<span class="sub-item">Consultar Empleado</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu">
		<i class="fas fa-cogs"></i>
		<p>Equipo</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Equipo","Equipo","getCreate"); ?>">
								<span class="sub-item">Registrar Equipo</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Equipo", "Equipo", "listar"); ?>">
							<span class="sub-item">Consultar Equipo</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu1">
		<i class="fas fa-briefcase"></i> 
		<p>Intervencion</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu1">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Intervencion","Intervencion","getCreate"); ?>">
								<span class="sub-item">Registrar Intervencion</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Intervencion", "Intervencion", "listar"); ?>">
							<span class="sub-item">Consultar Intervencion</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu3">
		<i class="far fa-copyright"></i>
		<p>Marca</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu3">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Marca","Marca","getCreate"); ?>">
								<span class="sub-item">Registrar Marca</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Marca", "Marca", "listar"); ?>">
							<span class="sub-item">Consultar Marca</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu7">
		<i class="far fa-address-card"></i>
		<p>Proveedor</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu7">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Proveedor","Proveedor","getCreate"); ?>">
								<span class="sub-item">Registrar Proveedor</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Proveedor", "Proveedor", "listar"); ?>">
							<span class="sub-item">Consultar Proveedor</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>

<li class="nav-item">
	<a data-toggle="collapse" href="#submenu2">
		<i class="fas fa-file-export"></i>
		<p>Remision</p>
		<span class="caret"></span>
	</a>
	<div class="collapse" id="submenu2">
		<ul class="nav nav-collapse">
			<li>
					<ul class="nav nav-collapse subnav">
						<li>
							<a href="<?php echo getUrl("Remision","Remision","getCreate"); ?>">
								<span class="sub-item">Registrar Remision</span>
							</a>
						</li>
					</ul>
			</li>
			<li>
				<ul class="nav nav-collapse subnav">
					<li>
						<a href="<?= getUrl("Remision", "Remision", "listar"); ?>">
							<span class="sub-item">Consultar Remision</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</li>









