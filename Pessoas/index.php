<?php
class Pessoa
{
    public $nome;
    public $sobrenome;

    public function falarNome()
    {
        echo $this->nome;
    }
    public function falarsobrenome()
    {
        echo $this->sobrenome;
    }
}

//Criar objeto
$dadospessoas = new Pessoa;
$dadospessoas->nome = "Daniela";
$dadospessoas->sobrenome = "Silva";

/*Função de imprimir objeto
var_dump($dadospessoas)
*/
$dadospessoas->falarNome();
?>