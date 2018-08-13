<?php

/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);

    return $PDO;
}


/**
 * Cria o hash da senha, usando MD5 e SHA-1
 */
function make_hash($str)
{
    return sha1(md5($str));
}


/**
 * Verifica se o usuário está logado
 */
function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }

    return true;
}
