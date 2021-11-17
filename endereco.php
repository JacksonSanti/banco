<?php

use src\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Santa Rita do Sapucai', 'Jardim das Palmeiras', 'Helio', '217');
$doisEndereco = new Endereco('Sao Paulo', 'São Benetido', 'Teresa Costa', '21D');


echo $umEndereco. PHP_EOL;
echo $doisEndereco. PHP_EOL;


echo $umEndereco-> bairro;
