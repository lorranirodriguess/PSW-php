<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 15</title>
</head>

<style>
    main{
        text-align: center;
    }
</style>

<body>

    <main>
        <h1>Área do retangulo</h1>
        <?php 
            function areaRetangulo($altura, $largura) {
                return $altura * $largura;
            }

            $altura = $_POST['altura'];
            $largura = $_POST['largura'];
            $resultado = areaRetangulo($altura, $largura);

            echo "<p>A área retangulo é: $resultado</p>";
        
        ?>
    </main>    

</body>
</html>