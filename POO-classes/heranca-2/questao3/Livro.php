<?php 
    class Livro extends Produto{
            public string $autor;

            public function adicionarAutor($autor){
                $this->autor=$autor;

                return "O autor do livro é {$autor}";
            }
        }
?>