<?php
class Pessoa
{
    //public - publica que pode ser acessado por qualquer pessoa;
    //private - privado que pode ser acessado atravéis da class;
    //protected - propriedade protegida pode ser acessado pela classe e por classe que herda as caracteristicas dela.

    private $nome;
    //get define a variável nome
    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }

    //Retornar os dados da SetNome
    public function getNome()
    {
        return $this->nome;
    }

}
