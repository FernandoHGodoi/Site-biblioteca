<?php

    //CHAMA A PAGINA CONEXAO PARA CONECTAR O ENVIA_FORM COM O BANCO
    include_once("conexao.php"); 

    //CRIA VARIAVEIS PARA RECEBEREM OS DADOS DIGITADOS PELO USUARIO
    $titulo = $_POST['nm_livro'];
    $edicao = $_POST['edicao'];
    $autor = $_POST['autor_id'];
    $editora = $_POST['editora_id'];
    $categoria = $_POST['categoria_id'];
    $ano = $_POST['ano'];
    $sinopse = $_POST['sinopse'];
    $capa = $_POST['capa'];
    $vl_aluguel = $_POST['preco'];
    $qtd = $_POST['quantidade'];

    //UTILIZA-SE AS QUERIES PARA INSERIR DADOS NO BANCO VIA VARIAVEIS DO FORM
    $result = mysqli_query($conn, "INSERT INTO `livro`(`nm_livro`, `edicao`, `ano`, `editora_id`, `categoria_id`, `autor_id`, `capa`, `quantidade`, `preco`, `sinopse`) 
    VALUES('$titulo', '$edicao', '$ano', '$editora', '$categoria', '$autor', '$capa', '$qtd', '$vl_aluguel','$sinopse')");

    //ENCERRA A CONEXAO COM O BANCO
    mysqli_close($conn);

    //A PÁGINA É ATUALIZADA
    header('location: cad_livro.php');

?>