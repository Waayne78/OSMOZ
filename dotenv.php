<?php 

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// Variables d'environnement pour PHP_Mailer
$mailhost = $_ENV['SMTP_HOST'];
$mailport = $_ENV['SMTP_PORT'];
$mailuser = $_ENV['SMTP_USERNAME'];
$mailpassword = $_ENV['SMTP_PASSWORD'];
$mailencrypt = $_ENV['SMTP_ENCRYPTION'];