<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 14</title>
</head>

<style>
    main{
        text-align: center;
    }
</style>

<body>

    <main>
        <h1>Soma</h1>
        <?php 
            function soma($x, $y) {
                return $x + $y;
            }

            $x = $_POST['x'];
            $y = $_POST['y'];
            $resultado = soma($x, $y);

            echo "<p>O resultado da soma é: $resultado</p>";
        
        ?>
    </main>    

</body>
</html>