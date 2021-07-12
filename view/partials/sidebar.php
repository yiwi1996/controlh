<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?php 
							if(isset($_SESSION['usuario'])){

								echo $_SESSION['usuario'];
								
							} else {

								echo "Nombre Usuario";
							}
							?>
							<span class="user-level"> 
								<?php 

									if(isset($_SESSION['rol'])){

										echo $_SESSION['rol_descripcion'];
										
									} else {

										echo "Rol";
									} 
								?>
							</span>
						</span>
					</a>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="#" onclick="window.location.href='index.php';">
						<i class="fas fa-home"></i>
						<p>Inicio</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">MÓDULOS</h4>
				</li>
				<?php 
					if(isset($_SESSION['acceso'])){

						if($_SESSION['rol'] == 1){

							include_once "../view/partials/sidebar/sidebarAdmin.php";
						}else if($_SESSION['rol'] == 2) {
							
							include_once "../view/partials/sidebar/sidebarManEncargado.php";
						}else {

							redirect("login.php");
						}
					} else {

						?>
						<a class="btn btn-info" href=" <?php echo getUrl("Acceso", "Acceso", "getLogin", false, "ajax") ?>">
							<span class="">Iniciar Sesión</span>
						</a>

						<?php
					}
				?>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->