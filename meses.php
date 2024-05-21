
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data em PHP</title>
</head>
<body>
    <br>
    <h1 style="color:blue;">Descubra qual é o mês</h1>

    <form action="" method="get">

    <label for="mes">Digite o número do mês: </label>
    <input type="number" name="mes" id="mes">
    <br><br>
    <button type="submit" class="btn btn-info">Enviar</button>
    </form>

<?php 

    if (isset($_GET['mes'])) {
        $numero = $_GET['mes'];
        
        $meses = array(
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        );
        
        if ($numero >= 1 && $numero <= 12) {
            echo "<br><p>O mês do número $numero é: " . $meses[$numero] . "</p>";
        }
        else{
            echo "<br>O mês não existe!";
        }
    }

?>

</body>
</html>