<?php

namespace Model;

interface Autenticar
{
    public function login(Funcionario $funcionario, string $senha):string;
}