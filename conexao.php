<?php

date_default_timezone_set('America/Sao_Paulo');

$servidor = 'localhost';
$banco = 'clinica';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

$nome_sistema = 'Sistema para Clinicas';
$email_sistema = 'contato@hugocursos.com.br';
$telefone_sistema = '(31)97527-5084';

?>