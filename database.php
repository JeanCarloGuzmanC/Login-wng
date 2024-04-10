<?php

$server = 'mxa.h.filess.io';
$username = 'PHPformulario_giantmixat';
$password = '69395b24a0b9d61cbfc650b1b2171152f9b2484d';
$database = 'PHPformulario_giantmixat';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
