<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$frist_name = isset($_POST['frist_name']) ? $_POST['frist_name'] : null;
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$date = isset($_POST['date']) ? $_POST['date'] : null;

$passwordHash = md5($password);
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($frist_name) || empty($last_name) || empty($email) || empty($newsletter) || empty($password) || empty($date) )
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cliente (client_frist_name, client_last_name, client_email, client_news, client_password, client_aniversario) VALUES(:frist_name, :last_name, :email, :newsletter, :password, :date)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':frist_name', $frist_name);
$stmt->bindParam(':last_name', $last_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':newsletter', $newsletter);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':date', $date);
 
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}