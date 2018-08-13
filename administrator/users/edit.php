<?php
 
require_once 'init.php';
 
// resgata os valores do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
 
$passwordHash = md5($password);
// validação (bem simples, mais uma vez)
if (empty($nome) || empty($email) || empty($username) || empty($password))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE users SET nome = :nome, cargo = :cargo, username = :username, password = :password, email = :email WHERE id_users = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cargo', $cargo);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}