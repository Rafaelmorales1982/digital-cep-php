<?php
//05-10-2024
namespace rafaelmor\DigitalCep;//teste 2024 05-10-2024
//testanto git
//criando classe mesmo nome do arquivo //////
class Search {
    //pegando esse pacote no https://packagist.org/  nome dele é CEP do Brasil Web Service ViaCep (https://viacep.com.br)  tem que acessar viacep para pegar o link
 private $url = "https://viacep.com.br/ws/"; 
//criando uma função do tipo array
 public function getAddressFromZipCode(string $zipCode): array 
 {
    $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
    $get = file_get_contents($this->url . $zipCode . "/json");
    return (array) json_decode($get);//teste  222 1982

 }
}