<?php

$a1 = [
    'nome'=> 'Bruno',
    'email'=>'bapostolico@gmail',
    'telefone'=>'2199370',
    'notas'=>[
        9,
        8.9,
        7.5,
        6
    ]
];

$a2 = [
    'nome'=>'Priscila',
    'email'=>'priscila@gmail',
    'telefone'=>'2199363',
    'notas'=>[
        9,
        8.9,
        7.5,
        6
    ]
];

/* $alunos = [ //dimensão 1
    [ //dimensão 2
        [//dimensão3
            'Bruno Apostólico'
        ]
    ]
]; */

$alunos = [ //dimensão 1
     $a1,
     $a2,
];

//echo $alunos[0][0][0];

var_dump($alunos);