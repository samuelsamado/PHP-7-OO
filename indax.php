<?php
include_once('./src/Pessoa.php');
include_once('./src/Endereco.php');

$endereco1 = new Endereco('SP','Bebedouro','Lucas Evangelista', '1234','Centro','14700-214');
$pessoa1 = new pessoa('Samuel', 25,$endereco1);
// $pesoas2 = new pessoa('Ligia', 30);
// unset($pesoas2);
var_dump($endereco1);
var_dump($pessoa1::getNumPessoas());
