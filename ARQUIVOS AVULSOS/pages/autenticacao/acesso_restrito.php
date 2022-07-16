<?php
    
    $teste = $_COOKIE['user'];

	// Se o usuário não está logado, manda para página de login.
	if($teste == ""){
		
		echo "erro";
		//$_SESSION['msgerro'] = "Sessão expirada!";
		header("Location: http://localhost/curso_php/biblioteca/template/pages/autenticacao/login.php?");
		
	}else{

        echo $_COOKIE['user'];

    };
    

?>