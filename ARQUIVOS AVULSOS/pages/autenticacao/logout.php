<?php

	// Se o usuário não está logado, manda para página de login.

        setcookie("user", '');
		
	
		header("Location: login.php");
		
	

?>