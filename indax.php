<?php
include_once('./pessoa.php');

$pessoa1 = new pessoa('Samuel', 25);
$pesoas2 = new pessoa('Ligia', 30);
unset($pesoas2);
var_dump($pessoa1::getNumPessoas());
