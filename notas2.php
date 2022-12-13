<?php

$notas = [
    'Larissa' => 10,
    'Ana' => null,
    'José' => 9,
    'Antony' => 6,
    'Pedro' => 5
];

krsort($notas);
var_dump($notas);

echo gettype($notas) . PHP_EOL;

if(is_array($notas)){
    echo 'Sim, isso é um array' . PHP_EOL;
}

//var_dump(array_key_exists('Antony', $notas));
var_dump(isset($notas['Larissa']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10,$notas, true));

//array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula
echo 'Quem tirou 10?'. PHP_EOL;
echo array_search(10,$notas);
