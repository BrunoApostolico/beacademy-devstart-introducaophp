<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';
include 'Disciplina.php';

$a1 = new Aluno(); //instanciando a classe
$a1-> nome = 'Bruno'; //Atribuindo valores aos atributos
$a1-> cpf = '123.123.123-12';


$cursoPHP = new Curso(); //objeto Curso
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->descricao = 'Aprender o basico e intermediário do PHP';
$cursoPHP->cargaHoraria = 88;

echo "Nome: {$a1->nome}";