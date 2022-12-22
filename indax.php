<?php
include_once('./src/Pessoa.php');
include_once('./src/Endereco.php');
include_once('./src/Funcionario.php');
include_once('./src/Cliente.php');

$endereco1 = new Endereco('SP','Bebedouro','Lucas Evangelista', '1234','Centro','14700-214');
// $pessoa1 = new pessoa('Samuel', 25,$endereco1);
$funcionario1 = new Funcionario('Samuel', 25,$endereco1,'Progrmador',5.000);
// $pesoas2 = new pessoa('Ligia', 30);
// unset($pesoas2);
$funcionario1->setSenha('123');
var_dump($funcionario1->login('Samuel','123'));
// var_dump($pessoa1::getNumPessoas());
