<?php 

require_once "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM alunos WHERE id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$nome = $row['none'];
$matricula = $row['matricula'];
$data_nascimento = $row['data_nascimento'];

echo '<!DOCKTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action="atualiza_aluno.php" method="POST">
        <label for="nome">Home:</label>
        <input type="text" name="nome" value="' $nome. ' " required> <br><br>
        <label for="matricula">Matrícula:</label> 
        <input type="text" name="matricula" value="' .$matricula. '" required> <br><br>
        <label for="data_nascimento">Data de Nascimento:</label> 
        <input type="text" name="data_nascimento" value="' .$data_nascimento. '" required> <br><br>
        <input type="hidden" name="id" value="' .$id. '">
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>' ;

mysqli_close($conn);

?>