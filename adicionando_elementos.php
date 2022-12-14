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
array_push($alunos2023, 'Abraão ', 'Sabião', 'Sarara');//adiciona elementos no final
array_unshift($alunos2023, 'Moisés','Santos');//adiciona elementos na frente
array_pop($alunos2023);// tira o último elemento
//forma mais usada $alunos2023[] = 'Luiz';
var_dump($alunos2023);
