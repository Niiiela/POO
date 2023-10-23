<?php
/*Caminho da classe Pessoa.
require "Pessoas.php";
*/
/*Caminho da classe Pessoa.
require_once "Pessoas.php";
*/
//Caminho da classe Pessoa. O include tem uma diferência que é se informar uma classe que não existe será informado, não dará erro fatal.
include "Pessoas.php";

//Criar objeto
$dadospessoas = new Pessoa;
$dadospessoas->nome = "Daniela";
$dadospessoas->sobrenome = "Silva";

/*Função de imprimir objeto
var_dump($dadospessoas)
*/
$dadospessoas->falarNome();
?>