<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/head.php';
include 'telas/menu.php';

/* echo match ($url){
    '/' => include 'telas/home.php',
    '/home' => include 'telas/home.php',
    '/login' => include 'telas/login.php',
    '/cadastro' => include 'telas/cadastro.php',
    default => include 'telas/404.php',
}; */

if ($url === '/'){
    include 'telas/home.php';
} elseif($url === '/login'){
    include 'telas/login.php';
} elseif($url === '/cadastro'){
    include 'telas/cadastro.php';
} else{
    include 'telas/404.php';
}

include 'telas/footer.php';