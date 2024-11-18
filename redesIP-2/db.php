<?php
$host = 'db_redes2';  // Ajustado para o servidor local
$dbname = 'redes2';
$username = 'root';
$password = 'mypassword';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
