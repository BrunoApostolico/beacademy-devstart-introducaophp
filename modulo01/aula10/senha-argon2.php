<?php

$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL; //Gera uma nova senha a cada execução
echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL;
echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL;