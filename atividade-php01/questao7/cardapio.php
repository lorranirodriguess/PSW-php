<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questao 07</title>
</head>

<style>

    main{
        margin-top: 40px;
        color: #f6c342;
        box-shadow: 12px 10px 20px #651f036c ;
        border-radius: 30px;
    }

    input{
        background-color: beige;
        border: none;
        padding: 4px;
        margin-top: 4px;
        border-radius: 8px;
    }

    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    p{
        font-size: 18px;
    }

    h1{
        margin-bottom: 0;
        color: #fff;
    }

    h2{
        font-size: 20px;
        width: 90%;
    }

    img{
        width: 60px;
    }

    .lanches1{
        display: flex;
        width: 100%;
        justify-content: space-between;
        color: #ffdda6;
    }

    .lanches2{
        width: 45%;
        display: flex;
        flex-direction: column;
    }

    .blocos{
        display: flex;
        justify-content: space-between;
    }

    label{
        color:rgb(239, 216, 96);
        font-weight: 600;
    }

    select{
        padding: 4px 10px;
        border: none;
        border-radius: 20px;
        background-color:rgb(255, 251, 239);
        color: #000;
    }

    form{
        margin-top: 20px;
    }

</style>

<body>
    <main>
        <img src="imagens/logo.png" alt="logo">
        <?php 
            $nome = $_POST["nome"];
            
            echo " <h1>Olá, $nome</h1>";
            echo "<p>Bem vindo(a) ao nosso cardápio de lanches. Aproveite!</p>";
        ?>

        <div class="lanches1">
            <div class="lanches2">
                <div class="blocos">
                    <h2>X-Bacon -----------------------</h2>
                    <p>R$19,00</p>
                </div>
                <div class="blocos">
                    <h2>X-Frango ---------------------</h2>
                    <p>R$17,00</p>
                </div>
                <div class="blocos">
                    <h2>X-Calabresa ------------------</h2>
                    <p>R$16,00</p>
                </div>
            </div><!--lanches2-->
            <div class="lanches2">
                <div class="blocos">
                    <h2>X-Salada ----------------------</h2>
                    <p>R$15,00</p>
                </div>
                <div class="blocos">
                    <h2>X-Tudo ------------------------</h2>
                    <p>R$20,00</p>
                </div>
                <div class="blocos">
                    <h2>X-Burger ---------------------</h2>
                    <p>R$18,00</p>
                </div>
            </div><!--lanches2-->
        </div><!--lanches1-->

        <form action="./pedido.php" method="post">
            <label for="pedido">Escolha seu pedido:</label><br>
            <select name="pedido" id="pedido" required>
                <option value="">Selecione</option>
                <option value="X-Bacon">X-Bacon</option>
                <option value="X-Frango">X-Frango</option>
                <option value="X-Calabresa">X-Calabresa</option>
                <option value="X-Salada">X-Salada</option>
                <option value="X-Tudo">X-Tudo</option>
                <option value="X-Burguer">X-Burguer</option>       
            </select><br><br>
            <input type="submit" value="Realizar pedido" class="saiba-mais">
        </form>
    </main>
</body>
</html>