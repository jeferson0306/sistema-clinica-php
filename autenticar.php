<?php
@session_start();
global $pdo;
require_once('conexao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios WHERE EMAIL = :usuario AND SENHA = :senha");

$query->bindValue(":usuario", $usuario);
$query->bindValue(":senha", $senha);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);

if ($linhas > 0) {
    $_SESSION['$nome'] = $res[0]['NOME'];
    $_SESSION['id'] = $res[0]['ID'];
    $_SESSION['$nivel'] = $res[0]['NIVEL'];
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header("Location: painel/index.php");
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    echo '<script>alert("Dados incorretos!");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}

?>