<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-06-05</title>
</head>
<body>

<?php 

    class Usuario
    {
        public string $nome;
        public string $email;
        public int $idade; 


        public function cadastrar ($nome, $email, $idade)
        {
            //$this: indica que estou utilizando o atributo acima (don public)
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> idade = $idade;
            //Nesse momento podemos cadastrar no BD

            return 'O usuário <strong>'. $this->nome. '</strong> com e-mail <strong>'.$this->email.'</strong> e idade '. $this->idade.'
            anos, cadastrado com sucesso!<br>';
        }
    }
    //require './Usuario.php'; //conectar com o outro arquivo
    $usuario = new Usuario(); //o new cria um novo objeto a partir da classe usuario(instanciando a classe criando um objeto)
    $msg = $usuario->cadastrar("Ana Beatriz","anabeatriz@gmail.com",17); //a variavel usuario é o novo objeto, a setinha está chamando o q eu quero da classe, ou seja o metodo
    echo $msg;    
?>
    
</body>
</html>
