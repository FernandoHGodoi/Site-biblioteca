<?php

	// Se o usuário não está logado, manda para página de login.
	if (!isset($_SESSION['user'])){
		
		
		$_SESSION['msgerro'] = "Sessão expirada!";
		header("Location: login.php");
		
	};

?>