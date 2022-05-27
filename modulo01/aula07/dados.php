<?php

//array associativo
$dados = [
    'nome' => 'Bruno',
    'sobrenome' => 'Apostolico',
    'cidade' => 'Rio de Janeiro',
    'idade' => '36',
    'ano_nascimento' => 1985,
    'time' => 'Fluminense',

];

echo "Nome: " . $dados['nome'] . '<br>';
echo "Sobrenome: " . $dados['sobrenome'] . '<br>';
echo "Cidade: " .$dados['cidade']. '<br>';
echo "Idade: ". $dados['idade']. '<br>';
echo "Ano de Nascimento: ".$dados['ano_nascimento'].'<br>';
echo "Time: ".$dados['time'].'<br>';