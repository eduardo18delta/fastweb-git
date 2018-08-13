<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;

$passwordHash = md5($password);
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($nome) || empty($cargo) || empty($username) || empty($password))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO users(nome, cargo, username, password, email) VALUES(:nome, :cargo, :username, :password, :email)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cargo', $cargo);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':email', $email);
 
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}