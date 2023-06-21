<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$user = $_POST['username'];
$pass = $_POST['password'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);

}
 $sql = "SELECT * FROM usuarios  WHERE username '$user' and password = '$pass'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0){
     echo "Login bem-sucedido!";
 }else {
     echo "Usuário ou senha inválidos.";
 }

 $conn->close();
 ?>