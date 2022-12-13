<?php

$notasBimestre1 = [
    'Larissa' => 10,
    'José' => 9,
    'Antony' => 6,
    'Pedro' => 5
];

$notasBimestre2 = [
    'José' => 9,
    'Antony' => 2,
    'Pedro' => 8
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));




