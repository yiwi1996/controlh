<?php
session_start();

function redirect($url) {

	echo "<script type='text/javascript'>"
	."window.location.href='".$url."'"
	."</script>";
}
function dd($var) {

	echo "<pre>";
	die(print_r($var));
}
function getUrl($modulo, $controlador, $funcion, $parametro=false, $pagina=false) {

	if ($pagina==false) {

		$pagina="index";
	}

	$url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

	if ($parametro!=false) {

		foreach ($parametro as $key => $valor) {

			$url.="&$key=$valor";
		}
	}

	return $url;
}
function resolve() {

	$modulo=ucwords($_GET['modulo']);
	$controlador=ucwords($_GET['controlador']);
	$funcion=$_GET['funcion'];

	if (is_dir("../controller/$modulo")) {

		if (file_exists("../controller/$modulo/".$controlador."Controller.php")) {

			include_once "../controller/$modulo/".$controlador."Controller.php";

			$nombreClase=$controlador."Controller";
			$objeto=new $nombreClase();

			if (method_exists($objeto,$funcion)) {

				$objeto->$funcion();
			} else {

				echo "La funcion no existe";
			}
		} else {

			echo "El controlador no existe";
		}
	} else {
		echo "El módulo no existe";
	}
}
?>

