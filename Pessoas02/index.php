<?php
//Caminho da classe Pessoa.
require "Pessoas.php";

//Criar objeto
$dadospessoas = new Pessoa;
$dadospessoas->setNome("Dani");
echo $dadospessoas->getNome();