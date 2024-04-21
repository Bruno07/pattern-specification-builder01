<?php

require_once "./src/ValidationBuilder.php";
require_once "./src/ValidationNameRequiredSpecification.php";
require_once "./src/ValidationMinorSpecification.php";

$name = readline('Qual é seu nome ?');
$age  = readline('Qual é sua idade ?');

try {
    
    (new ValidationBuilder)
        ->addValidationSpecification(new ValidationNameRequiredSpecification($name))
        ->addValidationSpecification(new ValidationMinorSpecification($age));

    echo "Você é {$name} e tem {$age} anos de idade" . PHP_EOL; 

} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}