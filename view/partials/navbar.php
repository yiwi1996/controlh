<div class="main-header">
	<!-- Logo Header -->
	<div class="logo-header" data-background-color="blue">
		
		<a href="index.html" class="logo">
			<img src="../web/img/mercapaba.PNG" width="90px" alt="navbar brand" class="navbar-brand">
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="icon-menu"></i>
			</span>
		</button>
		<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
		<div class="nav-toggle">
			<button class="btn btn-toggle toggle-sidebar">
				<i class="icon-menu"></i>
			</button>
		</div>
	</div>
	<!-- End Logo Header -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
		<div class="container-fluid">
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">	
				<li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm d-flex">
							<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
							<i class="fas fa-angle-down white align-self-center mx-1" style="color: #fff; cursor: pointer;"></i>
						</div>
					</a>
					<ul class="dropdown-menu dropdown-user animated fadeIn">
						<div class="dropdown-user-scroll scrollbar-outer">
							<li>
								<div class="user-box">
									<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
									<div class="u-text">
										<h4><?php 
										if(isset($_SESSION['usuario'])){

											echo $_SESSION['usuario']." ".$_SESSION['apellido'];
											
										} else {

											echo "Nombre Usuario";
										}
										?></h4>
										<h4><?php 

										if(isset($_SESSION['rol'])){

											echo $_SESSION['rol_descripcion'];
											
										} else {

											echo "Rol";
										} 
										?></h4>
									</div>
								</div>
							</li>
							<li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="fas fa-user-alt"></i>&nbsp;Mi Perfil</a>
								<div class="dropdown-divider"></div>
								<?php 
									if(isset($_SESSION['acceso'])){

										echo "<a class='dropdown-item' href='".getUrl("Acceso", "Acceso", "logout")."'>
											<i class='fas fa-sign-out-alt'></i>
											&nbsp;Cerrar Sesión
										</a>";
									}
								?>
							</li>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
</div>