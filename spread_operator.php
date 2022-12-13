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

$alunos2023 = [...$alunos2021, 'mexicano de chapéu', ...$novosAlunos];

var_dump($alunos2023);