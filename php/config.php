<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";  // Substitua pelo seu nome de usuário do banco de dados
$password = "usbw";  // Substitua pela sua senha do banco de dados
$dbname = "dallas_pet";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
=======
<?php
$servername = "localhost";
$username = "root";  // Substitua pelo seu nome de usuário do banco de dados
$password = "usbw";  // Substitua pela sua senha do banco de dados
$dbname = "dallas_pet";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
>>>>>>> 00923980e9edbe82e6b1895f6a70fd5e8358f27d
