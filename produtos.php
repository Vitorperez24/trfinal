<?php
$servername = "localhost";
$username = "root";  // Substitua pelo seu nome de usuário do banco de dados
$password = "usbw";  // Substitua pela sua senha do banco de dados
$dbname = "dallas_pet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT codigo_produto, nome_produto, preco_produto, nota_produto FROM produto";
$result = $conn->query($sql);

$produtos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
}

$conn->close();

echo json_encode($produtos);
?>
