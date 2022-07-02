<?php
    $login = $_POST['email'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('localhost','email','senha');
    $db = mysql_select_db('biblioteca');
    if (isset($entrar)) {

        $verifica = mysql_query("SELECT * FROM usuario WHERE email =
        '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.html';</script>";
            die();
        }else{
            setcookie("email",$login);
            header("Location:../../dashboard.php");
        }
    }
?>