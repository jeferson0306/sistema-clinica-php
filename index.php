<?php
require_once("conexao.php");

$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$linhas = @count($res);

$senha = '123';
$senha_crip = sha1($senha);

if ($linhas == 0) {
    $pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '', senha_crip = '$senha_crip', nivel = 'ADMINISTRADOR', ativo = 'SIM' ");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Clínicas - PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width = device - width, initial - scale = 1.0">
    <link rel="shortcut0icon" type="imagme/x-icon" href="img/icone.png">
</head>

<body>
<div class="login">
    <div class="form">
        <img src="img/logo.png" class="imagem" alt="logo">
        <form method="post" action="autenticar.php">
            <input type="email" placeholder="Usuário" name="usuario">
            <input type="password" placeholder="Senha" name="senha">
            <button>Login</button>
        </form>
    </div>
</div>
</body>

</html>
