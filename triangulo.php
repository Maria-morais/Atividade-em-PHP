
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tipos Triângulo</title>
</head>
<body>
    <br>
    <h2 style="color:blue">Classificação de Triângulo</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" id="lado1" name="lado1" required><br><br>

        <label for="lado2">Lado 2:</label>
        <input type="number" id="lado2" name="lado2" required><br><br>

        <label for="lado3">Lado 3:</label>
        <input type="number" id="lado3" name="lado3" required><br><br>

        <button type="submit" class="btn btn-info">Classificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        function classificarTriangulo($l1, $l2, $l3) {
            if ($l1 == $l2 && $l2 == $l3) {
                return "Equilátero";
            } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
                return "Isósceles";
            } else {
                return "Escaleno";
            }
        }

        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            $classificacao = classificarTriangulo($lado1, $lado2, $lado3);
            echo "<p>Os lados $lado1, $lado2 e $lado3 formam um triângulo $classificacao.</p>";
        } else {
            echo "<p>Os dados fornecidos não formam um triângulo válido.</p>";
        }
    }
    ?>
</body>
</html>