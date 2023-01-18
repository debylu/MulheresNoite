<?php


session_start();
ob_start();

unset ($_SESSION['nome']);
$_SESSION['msg'] = "Sessão Finalizada!";

header("Location: login.php");

if (!isset ($_SESSION ['nome']))
{$_SESSION['msg']="Erro: Necessário realizar o login para acessar a página!";
    header("Location:login.php");
}
?>

