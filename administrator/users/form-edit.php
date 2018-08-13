<?php
require 'init.php';
 
// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
 
// valida o ID
if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}
 
// busca os dados du usuário a ser editado
$PDO = db_connect();
$sql = "SELECT * FROM users WHERE id_users = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
$stmt->execute();
 
$user = $stmt->fetch(PDO::FETCH_ASSOC);
 
// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido
if (!is_array($user))
{
    echo "Nenhum usuário encontrado";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<meta name="author" content="Eduardo Henrique"/>
<meta name="description" content="Supermercado Web"/>
<meta name="keywords" content="sistema,PDV,desenvolvimento,gestão"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title>Usuários Sistema - Edit</title>

<link rel="shortcut icon" href="../img/shortcut/pdv.png"/>
<link rel="stylesheet" href="../content/css/menu.css"/>
<link rel="stylesheet" href="../content/bootstrap/css/bootstrap.css"/>


</head>

<body >

<div class="container-fluid">

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../menu.php">Supermercado Web</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="../menu.php">início</a></li>
     <li><a href="../estoque/estoque.php">Estoque</a></li>
     <li><a href="users/index.php">Usuários</a></li>
     <li><a href="../login/logout.php">Sair</a></li>
    </ul>
   </div>
  </div>
 </nav>

<br>
<br>
<br>
 
<body>

<div class="container">
 
<div class="alert alert-success">Edição de Usuário</div>
         
<form action="edit.php" method="post">

<div class="form-group">
<label>Nome: </label>
<input class="form-control" type="text" name="nome" value="<?php echo $user['nome'] ?>">
</div>

<div class="form-group">
<label>Cargo: </label>
<input class="form-control" type="text" name="cargo" value="<?php echo $user['cargo'] ?>" readonly>
</div>

<div class="form-group">        
<label>Username:</label>
<input class="form-control" type="text" name="username" value="<?php echo $user['username'] ?>">
</div>

<div class="form-group">
<label>Password: </label>
<input class="form-control" type="text" name="password" value="<?php echo $user['password'] ?>">
</div>
 
<div class="form-group">
<label>Email: </label>
<input class="form-control" type="text" name="email" value="<?php echo $user['email'] ?>">
</div>
 
<div class="form-group">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input class="btn btn-success form-control" type="submit" value="Alterar">
</div>

</form>
 
</div>
</body>
</html>
