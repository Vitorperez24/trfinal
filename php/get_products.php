<?php
include 'config.php';

// Consulta SQL para buscar todos os produtos
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Retorna os produtos como JSON
header('Content-Type: application/json');
echo json_encode($products);

$conn->close();
?>
