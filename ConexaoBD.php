<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'projetofinal';

$conexao = new mysqli($host, $user, $password, $db);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());


