<li class="nav-item">
	<a data-toggle="collapse" href="#">
		<i class="fas fa-cogs"></i>
		<p>Mantenimiento</p>
		<!-- <span class="caret"></span> -->
	</a>
	<div class="collapsed" id="submenu">
		<ul class="nav nav-collapse">
			<li>
				<a data-toggle="collapse" href="#registrar">
					<span class="sub-item">Realizar Mantenimiento</span>
					<span class="caret"></span>
				</a>
				<div class="collapse" id="registrar">
					<ul class="nav nav-collapse subnav">
						<li>
							<a id="modal_btn" type="button" href="#" data-toggle="modal" data-target="#modal" data-url="<?php echo getUrl("Maquina", "Maquina", "modalMaquina", false, "ajax");?>" data-id="1">
								<span class="sub-item">Preventivo</span>
							</a>
						</li>
						<li>
							<a id="modal_btn" type="button" href="#" data-toggle="modal" data-target="#modal" data-url="<?php echo getUrl("Maquina", "Maquina", "modalMaquina", false, "ajax");?>" data-id="2">
								<span class="sub-item">Correctivo</span>
							</a>
						</li>
						<!-- <li>
							<a id="modal_btn" type="button" href="#" data-toggle="modal" data-target="#modal" data-url="<?php //echo getUrl("Maquina", "Maquina", "modalMaquina", false, "ajax");?>" data-id="3">
								<span class="sub-item">Predictivo</span>
							</a>
						</li> -->
					</ul>
				</div>
			</li>
			<li>
				<a class="" href="<?php echo getUrl("MantenimientoEncargado", "MantenimientoEncargado", "listHistorialMantenimiento"); ?>">
					<span class="sub-item">Historial de Mantenimiento</span>
				</a>
			</li>
		</ul>
	</div>
</li>