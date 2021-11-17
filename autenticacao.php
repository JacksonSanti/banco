<?php

use src\Modelo\CPF;
use src\Modelo\Funcionario\Diretor;
use src\Service\Autenticador;

require_once 'autoload.php';


$autenticador = new Autenticador();


$umDiretor = new Diretor('Gabriel', new CPF('124.004.446-16'),'Diretor', 8000.0);

$autenticador-> tentaLoguin($umDiretor,'4321');


