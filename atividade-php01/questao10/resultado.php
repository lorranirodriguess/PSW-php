<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 10</title>
</head>
<body>

    <main>
        <h1>Idades</h1>
        <?php 
            $idades = array_map('intval', explode(',', $_POST['idades'])); 
            
            $menor18 = 0;
            $maior65 = 0;

            foreach ($idades as $i) {
                if ($i < 1) break;
                if ($i < 18) $menor18++;
                if ($i > 65) $maior65++;
            }

            echo "<p>Quantidade de pessoas com menos de 18 anos: $menor18</p>";
            echo "<p>Quantidade de pessoas com mais de 65 anos: $maior65</p>";

        ?>
    </main>    

</body>
</html>