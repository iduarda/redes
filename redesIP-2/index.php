<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $stmt = $conn->prepare("INSERT INTO usuarios (nome) VALUES (:nome)");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
}

$stmt = $conn->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #FAFAD2;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    form {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    h2 {
        color: #333;
    }

    ul {
        list-style-type: none;
        padding: 0;
        max-width: 300px;
        margin: 0;
    }

    li {
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
    <input type="submit" value="Adicionar Usuário">
</form>

<h2>Usuários:</h2>
<ul>
    <?php foreach ($usuarios as $usuario) { ?>
        <li><?php echo htmlspecialchars($usuario['nome']); ?></li>
    <?php } ?>
</ul>