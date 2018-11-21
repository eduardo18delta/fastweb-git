

<?php
$pdo = new PDO(   'mysql:host=localhost; dbname=fastweb-git', 'eduardo', '123456', 
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );

?>
