<?php

$arquivo = fopen('produtos.csv','a+'); // a+ significa leitura e escrita, pode se usar tb 'w' escrita e 'r' leitura

fwrite($arquivo, 'Bruno'.PHP_EOL);
fwrite($arquivo, 'Priscila'.PHP_EOL);
fwrite($arquivo, 'Eloah'.PHP_EOL);

fclose($arquivo); //fecha o arquivo após manipular, e liberar memória

