<?php
$host = 'db_redes3';  // Ajustado para o servidor local
$dbname = 'redes3';
$username = 'root';
$password = 'mypassword';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
