<?php
// Conexão com o banco de dados
require "conexao.php";

// Inicia sessões
session_start();

// Recupera o login
$login = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha)
{
	echo "Você deve digitar sua senha e login!";
	exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.
*/
$SQL = "SELECT `usuario_id`, `nm_usuario`, `email`, `senha`, `tipo_usuario` FROM usuario
WHERE email = `` . $login . ``";
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	$dados = @mysql_fetch_array($result_id);

	// Agora verifica a senha
	if(!strcmp($senha, $dados["senha"]))
	{
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
		$_SESSION["id_usuario"]= $dados["usuario_id"];
		$_SESSION["nome_usuario"] = stripslashes($dados["nm_usuario"]);
		$_SESSION["permissao"]= $dados["tipo_usuario"];
		header("Location: index.php");
		exit;
	}
	// Senha inválida
	else
	{
	 "Senha inválida!";
	exit;
	}
}
	// Login inválido
else
{
	echo "O login fornecido por você é inexistente!";
	exit;
}
?>