<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Jose',
        'nota' => 8,
    ],
    [
        'aluno' => 'Sonia',
        'nota' => 7,
    ],
];
/*
function ordenaNotas(array $nota1, array $nota2): int{
    if($nota1 > $nota2){
        return -1;
    }

    if($nota2 > $nota1){
        return 1;
    }

    return 0;
}
*/

function ordenaNotas(array $nota1, array $nota2): int{
    return $nota2['nota'] <=> $nota1['nota'];
}
usort($notas, 'ordenaNotas');
var_dump($notas);
