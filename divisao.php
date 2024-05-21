<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Divisão</title>
</head>
<body>
        
        
    <form action="" method="get">
        <br>
        <h2 style="color:blueviolet;">Descubra se os números são divisíveis por: 10, 5 ou 2</h2>


            <label for="numero">Insira um número: </label>
            <input type="number" id="numero" name="numero" step="1" required><br><br>

            <button type="submit" class="btn btn-outline-info" style="color:blueviolet;">Calcular</button>

    </form>  
    
    <?php

        if(isset($_GET['numero'])) {
            
            $numero = $_GET['numero'];
            
            if ($numero % 10 == 0) {
                echo "O número $numero é divisível por 10.";

            } elseif ($numero % 5 == 0) {
                echo "O número $numero é divisível por 5.";

            } elseif ($numero % 2 == 0) {
                echo "O número $numero é divisível por 2.";

            } else {
                echo "O número $numero não é divisível por 10, 5 ou 2.";

            }
        }
    ?>

</body>

</html>
