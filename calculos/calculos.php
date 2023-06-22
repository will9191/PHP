<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h2 {
            margin-top: 50px;
        }
    </style>

    <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
 //mudar daqui p baixo
        $soma = $numero1 + $numero2
        $sub = $numero1 - $numero2
        $multi = $numero1 * $numero2
        $div = $numero1 / $numero2

        echo "<h2>Resultado:</h2>";
        echo "Soma: ". $soma . "<br>";
        echo "Subtração: ". $sub . "<br>";
        echo "Multiplicação: ". $multi . "<br>";
        echo "Divisão: ". $div . "<br>";
    ?>
</body>
</html>