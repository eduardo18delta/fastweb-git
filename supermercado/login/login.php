<?php

// inclui o arquivo de inicialização
require 'init.php';

// resgata variáveis do formulário
$email= isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($email) || empty($password))
{
    include 'erros/errorvazio.html';
    exit;
}
$passwordhash = md5($password);


$PDO = db_connect();

$sql = "SELECT client_id , client_email, client_password FROM cliente WHERE client_email = :email AND client_password = :password";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordhash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $lista) {
	$idcliente = $lista->client_id;
}

if (count($users) <= 0)
{
    include 'erros/errorlogin.html';
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;



 header("Location: ../perfil/perfil.php?id=$idcliente ");


