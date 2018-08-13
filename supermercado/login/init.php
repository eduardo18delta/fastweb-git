<?php

// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'supermercado');

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);

// inclui o arquivo de funçõees
require_once 'functions.php';
