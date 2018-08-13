

<?php
$pdo = new PDO(   'mysql:host=localhost; dbname=supermercado', 'root', '', 
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );

?>