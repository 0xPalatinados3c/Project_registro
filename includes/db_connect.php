<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "meu_banco";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
