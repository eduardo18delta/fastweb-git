

<?php
 
require_once 'content/init.php';
 
// pega os dados do formuário
$p_nome = isset($_POST['p_nome']) ? $_POST['p_nome'] : null;
$u_nome = isset($_POST['u_nome']) ? $_POST['u_nome'] : null;
$email_cad = isset($_POST['email_cad']) ? $_POST['email_cad'] : null;
$novidades = isset($_POST['novidades']) ? $_POST['novidades'] : null;
$senha_2 = isset($_POST['senha_2']) ? $_POST['senha_2'] : null;

$passwordHash = md5($senha_2);
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($p_nome) || empty($u_nome) || empty($email_cad) || empty($novidades))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cliente (client_frist_name, client_last_name, client_email, client_news, client_password ) VALUES(:frist_name, :last_name, :email, :newsletter, :password)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':frist_name', $p_nome);
$stmt->bindParam(':last_name', $u_nome);
$stmt->bindParam(':email', $email_cad);
$stmt->bindParam(':newsletter', $novidades);
$stmt->bindParam(':password', $passwordHash);

 
if ($stmt->execute())
{	
	header('Location: login/index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}