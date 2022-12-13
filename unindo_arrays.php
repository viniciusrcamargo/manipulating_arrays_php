<?php

$alunos2021 = [
  'Julemar',
  'Andre',
  'Sandra',
  'Robéria'
];

$novosAlunos = [
    'Gilberto',
    'Nunes',
    'Nego',
    'Damante',
    'Samanta'
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);
$alunos2023 = $alunos2021 + $novosAlunos;

//var_dump($alunos2022);

var_dump($alunos2023);