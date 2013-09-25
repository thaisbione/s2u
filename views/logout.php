<?php
	session_start();
	session_destroy();
	echo '<script> alert("Obrigado pela visita, até logo")</script>';

	header('Location: index.php');
?>
