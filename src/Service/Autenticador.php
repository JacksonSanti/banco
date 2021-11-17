<?php

namespace src\Service;

use src\Modelo\Funcionario\Diretor;

class Autenticador 
{
    public function tentaLoguin(Diretor $diretor,  string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo 'ok. Usuario Logado no sistema';
        } else {
            echo 'ops. Senha Incorreta.';
        }



    }

}

