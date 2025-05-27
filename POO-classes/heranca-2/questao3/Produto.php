<?php 
    class Produto{
            public string $nome;
            public float $preco;

            public function exibirProduto($nome,$preco){
                $this->nome=$nome;
                $this->preco=$preco;

                return "O {$nome} custa {$preco}";
            }


        }
?>