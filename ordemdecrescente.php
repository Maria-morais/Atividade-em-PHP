
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="descrecente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ordem descrecente | PHP</title>
</head>
<body>
    <br>
    <h1 style="color: green;">Ordem descrecente</h1>

<form action="" method="get">

    <label for="n1">Insira o 1º número: </label>
    <input type="number" name="n1" id="n1">
    <br><br>
    <label for="n2">Insira o 2º número: </label>
    <input type="number" name="n2" id="n2">
    <br><br>
    <label for="n3">Insira o 3º número: </label>
    <input type="number" name="n3" id="n3">
    <br><br>
    <button type="submit" class="btn btn-success">Enviar</button>

</form>

<?php

    if(isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {
        
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];
    
        
        function comparar($a, $b) {
            return $b - $a;
        }
    
        
        $numeros = array($n1, $n2, $n3);
    
        
        usort($numeros, 'comparar');
    
        
        echo "<br>Números ordenados em ordem decrescente: ";
        foreach ($numeros as $numero) {
            echo "$numero ";
        }
    }

?>

</body>
</html>