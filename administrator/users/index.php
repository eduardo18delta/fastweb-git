<?php
require_once 'init.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
$sql_count = "SELECT COUNT(*) AS total FROM users";
 
// SQL para selecionar os registros
$sql = "SELECT * FROM users";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<meta name="author" content="Eduardo Henrique"/>
<meta name="description" content="Supermercado Web"/>
<meta name="keywords" content="sistema,PDV,desenvolvimento,gestão"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title>Usuários Sistema</title>

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
    <a class="navbar-brand" href="../menu.php">Fast Web</a>
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
         
<div class="container">

<p><a class="btn btn-success" href="form-add.php">Adicionar Usuário</a></p>
 
 <div class="alert alert-success">Lista de Usuários do Sistema - Total de usuários: <?php echo $total ?> </div>
 
        <?php if ($total > 0): ?>
 
        <table width="50%" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['id_users']?></td>
                    <td><?php echo $user['nome']?></td>
                    <td><?php echo $user['cargo']?></td>
                    <td><?php echo $user['username']?></td>
                    <td><?php echo $user['password']?></td>
                    <td><?php echo $user['email']?></td>
                    <td>
                        <a class="btn btn-success" href="form-edit.php?id=<?php echo $user['id_users'] ?>">Editar</a>
                        <a class="btn btn-success" href="delete.php?id=<?php echo $user['id_users'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum usuário registrado</p>
 
        <?php endif; ?>

 </div>       
    </body>
</html>