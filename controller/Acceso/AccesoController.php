<?php 

	include_once "../model/Acceso/AccesoModel.php";
	class AccesoController{

		public function getLogin(){

			include_once "../web/Login.php";
		}

		public function postLogin(){

			if(isset($_POST['usu_correo']) && isset($_POST['usu_clave'])){

					
				$sql="SELECT u.usu_direccion,u.usu_telefono,u.usu_documento,u.usu_nombre, u.usu_apellido, u.usu_id, u.rol_id, r.rol_desc FROM usuario u, rol r WHERE u.rol_id=r.rol_id AND usu_clave='".$_POST['usu_clave']."' AND (usu_nickName='".$_POST['usu_correo']."' OR usu_correo='".$_POST['usu_correo']."')";

				$log = new AccesoModel();
				$login = $log->consult($sql);
				if(mysqli_num_rows($login) > 0){

					foreach($login as $l){

						$_SESSION['usu_id']=$l['usu_id'];
						$_SESSION['usuario']=$l['usu_nombre'];
						$_SESSION['apellido']=$l['usu_apellido'];
						$_SESSION['rol']=$l['rol_id'];
						$_SESSION['rol_descripcion']=$l['rol_descripcion'];
						$_SESSION['acceso']="autorizado";
					}
					redirect("index.php");
				}
				else{

					$_SESSION['error'] = "Error al autenticar";
					redirect("login.php");

				}
			}
		}

		public function logout(){

			session_destroy();
			redirect("login.php");
		}
	}

?>