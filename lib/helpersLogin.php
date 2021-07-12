<?php
	if (isset($_SESSION['acceso']) && $_SESSION['acceso']=="autorizado") {
		//void
	} else {
		redirect("login.php");
	}
?>