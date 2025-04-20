<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 13</title>
</head>

<body>

    <main>
        <h1>Transcrição</h1>
        <?php 
            function escreva($texto) {
                echo "<script>console.log('" . addslashes($texto) . "')</script>";
                return $texto;
            }

            $texto = $_POST['texto'];
            $texto_transcrito = escreva($texto);

            echo "<p>O texto digitado foi: $texto_transcrito</p>";
        
        ?>
    </main>    

</body>
</html>