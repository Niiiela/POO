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
?>