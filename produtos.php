<?php
include 'config.php'; // Inclua o arquivo de configuração do banco de dados

// Consulta SQL para buscar todos os produtos
$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);

// Array para armazenar os produtos
$produtos = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $produtos[] = $row;
    }
}

// Retorna os produtos como JSON
echo json_encode($produtos);
?>
