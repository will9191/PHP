<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turmas</title>
</head>
<body>
    <h1>Cadastro de Turmas</h1>
    <form action="processa_turma.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="periodo">Período:</label>
        <input type="text" id="periodo" name="periodo" required><br><br>

        <label for="professor">Professor:</label>
        <select name="professor" id="professor">
            <option value="">Selecione um professor</option>
            <?php
            require_once "conexao.php";

            $sql = "SELECT id, nome FROM professores";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)){
                echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>"
            }

            mysqli_close($conn);
            ?>
        </select><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>