<?php

require_once "vendor/autoload.php";
use rafaelmor\DigitalCep\Search;
$busca = new Search;
$resultado = $busca->getAddressFromZipCode('87970000');
print_r($resultado);