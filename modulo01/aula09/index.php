<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

/* match ($url){ //chama as telas diretamente pelo link do arquivo
    '/' => include 'telas/home.php',
    '/home' => include 'telas/home.php',
    '/login' => include 'telas/login.php',
    '/cadastro' => include 'telas/cadastro.php',
    '/listar' => include 'telas/listar.php',
    default => include 'telas/404.php',
}; */

match ($url){ // chama as telas através das funções
    '/' => home(),
    '/home' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    default => erro404(),
};

include 'telas/footer.php';