<?php

    //CHAMA A PAGINA CONEXAO PARA CONECTAR O ENVIA_FORM COM O BANCO
    include_once("conexao.php"); 

    //CRIA VARIAVEIS PARA RECEBEREM OS DADOS DIGITADOS PELO USUARIO
    $nome = $_POST['nome'];
    $nascimento = $_POST['dt_nascimento'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['uf'];
    $senha = md5($_POST['password1']);
    $palavra_seg = $_POST['palavra_seg'];
    $tipo_usuario = $_POST['tipo_usuario'];

    //UTILIZA-SE AS QUERIES PARA INSERIR DADOS NO BANCO VIA VARIAVEIS DO FORM
    $result = mysqli_query($conn, "INSERT INTO `usuario`(`nm_usuario`, `sexo`, `cpf`, `dt_nascimento`, `rua`, `bairro`, `numero`, `cidade`, `estado`, `email`, `telefone`, `tipo_usuario`, `senha`, `palavra_seg`) 
    VALUES ('$nome','$sexo','$cpf','$nascimento','$rua','$bairro','$numero','$cidade','$estado','$email','$telefone','$tipo_usuario','$senha','$palavra_seg')");

    //ENCERRA A CONEXAO COM O BANCO
    mysqli_close($conn);

    //A PÁGINA É ATUALIZADA
    header('location: cad_usuario.php');

?>