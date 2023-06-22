<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'biblioteca';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (mysqli_connect_errno())  {
 	echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
	exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!empty($_POST['nome_usuario']) && !empty($_POST['data_reserva']) && !empty($_POST['livro']))  {
		$nomeUsuario = $_POST['nome_usuario'];
		$dataReserva = $_POST['data_reserva'];
		$livroId = $_POST['livro'];

	$sql = "INSERT INTO reserva (nome_usuario, data_reserva, livro_id) VALUES ('$nomeUsuario', '$dataReserva', $livroId)";

    if (mysqli_query($conexao, $sql)) {
        echo "Reserva cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar reserva:" . mysqli_error($conexao);
    }
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
}

mysqli_close($conexao);
?>