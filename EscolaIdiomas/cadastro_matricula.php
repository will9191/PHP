<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Matrículas</title>
</head>
<body>
    <h1>Cadastro de Matrículas</h1>
    <form method="post" action="processa_matricula.php"></form>
        <label>Aluno:</label><br>
        <select name="aluno_id">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM alunos";

            $resultado = $conn->query($sql);

            while($linha = $resultado->fetch_assoc()){
                echo "<option value='" . $linha["id"] . "'>" . $linha["nome"] . "</option>";
            }

            ?>
        </select> <br><br>
        <label>Turma:</label> <br>
        <select name="turma_id">
            <?php 
                require_once "conexao.php";

                $sql = "SELECT * FROM turmas";

                $resultado = $conn->query($sql);

                while ($linha = $resultado->fetch_assoc()){
                    echo "<option value='" . $linha["id"] . "'>" . $linha["nome"] . "</option>";
                }

                $conn->close();

            ?>

        </select><br><br>
        <label>Data de Matrícula:</label><br>
        <input type="data" name="data_matricula"><br><br>
        <input type="submit" value="Cadastrar">

    </form>
    
</body>
</html>