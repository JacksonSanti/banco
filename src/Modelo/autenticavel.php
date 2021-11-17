<?php 

namespace src\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;

}
