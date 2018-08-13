<?php

// inclui o arquivo de inicialização
require 'init.php';

// resgata variáveis do formulário
$username= isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($username) || empty($password))
{
    include 'erros/errorvazio.html';
    exit;
}
$passwordhash = md5($password);


$PDO = db_connect();

$sql = "SELECT username, password FROM users WHERE username = :username AND password = :password";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $passwordhash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
    include 'erros/errorlogin.html';
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];

header('Location: ../menu.php');
