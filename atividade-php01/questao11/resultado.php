<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 11</title>
</head>
<style>
    div{
        display: flex;
        flex-direction: row;
    }

    p{
        margin-right: 5px;
    }
</style>
<body>

    <main>
        <h1>Números</h1>
        <?php 
            $numeros = array_map('intval', explode(',', $_POST['numeros'])); 
            $numeros = array_slice($numeros, 0, 5);

            echo "Os números digitados foram: ";
            echo "<div>";
            foreach ($numeros as $i) {
                echo "<p> $i; </p>";
            }
            echo "</div>";

        ?>
    </main>    

</body>
</html>