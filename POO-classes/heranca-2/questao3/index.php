<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 03</title>
</head>
<body>
<?php 
    require './Produto.php';
    require './Livro.php';
    require './DVD.php';

    $exibir = new Livro();
    $exibir2 = new DVD();
    echo $exibir -> adicionarAutor("Clarisse")."<BR>";
    echo $exibir -> exibirProduto("livro",17.50)."<BR>";
    echo $exibir2 -> adicionarDuracao(1.2)."<BR>";

?>
</body>
</html>