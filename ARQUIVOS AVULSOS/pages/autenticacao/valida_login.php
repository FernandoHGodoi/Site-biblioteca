<?php

    include_once "../../conexao.php";

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $result = mysqli_query($conn,"SELECT senha FROM usuario
                                     WHERE email = '$email'");
            
    $resultado = mysqli_fetch_row($result);
 
    $_SESSION['usuario'] = $resultado['nm_usuario'];
    $_SESSION['usuarioTipo'] = $resultado['tipo_usuario'];
    if($resultado != NULL){
        if($senha == $resultado[0]){
            echo "Acesso";
            setcookie("user", $email, time()+3600);

            header('location: ../../dashboard.php');
        }else{
            echo "Senha errada";
            header('location: login.php');
        }
    }else{
        header('location: login.php');
    };

    //mysqli_close($conn);

   // header('location: form.php');
    
?>