<?php

require_once './autoload.php';

use Model\Pessoa;
use Model\Endereco;
use Model\Funcionario;
use Model\Cliente;

$endereco1 = new Endereco('SP','Bebedouro','Lucas Evangelista', '1234','Centro','14700-214');
// $pessoa1 = new pessoa('Samuel', 25,$endereco1);
$funcionario1 = new Funcionario('Samuel', 25,$endereco1,'Progrmador',5.000);
// $pesoas2 = new pessoa('Ligia', 30);
// unset($pesoas2);
$funcionario1->setSenha('12sd');
// var_dump($funcionario1->login('Samuel','123'));
print_r($endereco1->nomeLogradouro);
// var_dump($pessoa1::getNumPessoas());
