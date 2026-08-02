<?php
require_once 'config/database.php';
$cfg = require 'config/database.php';
try {
    $pdo = new PDO("mysql:host={$cfg['host']};dbname={$cfg['db']};charset={$cfg['charset']}", $cfg['user'], $cfg['pass'], [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
} catch(PDOException $e){
    die('Database connection error. Please configure config/database.php');
}
