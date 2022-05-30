<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/head.php';
include 'telas/menu.php';

match ($url){
    '/' => include 'telas/home.php',
    '/home' => include 'telas/home.php',
    '/login' => include 'telas/login.php',
    '/cadastro' => include 'telas/cadastro.php',
    '/listar' => include 'telas/listar.php',
    default => include 'telas/404.php',
};

include 'telas/footer.php';