<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 03</title>
</head>
<body>

    <main>
        <h1>Ímpar ou Par?</h1>
        <?php 
            $numero = $_POST["num"];

            if ($numero%2 == 0) {
                $validar = "PAR";
                
            }
            else{
                $validar = "ÍMPAR";
            }
            
            echo "<p>O número inserido é $validar.</p>";
        ?>
    </main>    

</body>
</html>