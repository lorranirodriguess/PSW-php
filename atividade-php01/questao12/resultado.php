<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 12</title>
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
        <h1>Nomes</h1>
        <?php 
            $nomes = explode(',', $_POST['nomes']); 
            $nomes = array_slice($nomes, 0, 5);

            echo "Os nomes digitados foram: ";
            echo "<div>";
            foreach ($nomes as $i) {
                echo "<p> $i; </p>";
            }
            echo "</div>";

        ?>
    </main>    

</body>
</html>