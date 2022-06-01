<?php

function login(){
    include 'telas/login.php';
}

function home(){
    include 'telas/home.php';
}

function cadastro(){
    if ($_POST){ //Se existir POST
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv','a+');

        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        fclose($arquivo);

        $mensagem = 'Pronto, Cadastro Realizado!';

        include 'telas/mensagem.php';
    }

    include 'telas/cadastro.php';
}

function listar(){
    
    $contatos = file('dados/contatos.csv'); //Lê um arquivo csv
    include 'telas/listar.php';
}

function excluir(){
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv'); //Lê um arquivo csv
    
    unset($contatos[$id]); //remove um item do arquivo

    unlink('dados/contatos.csv'); //deleta o arquivo

    $arquivo = fopen('dados/contatos.csv', 'a+'); //recria o arquivo

    foreach($contatos as $cadaContato){
        fwrite($arquivo, $cadaContato);
    }
    
    $mensagem = 'Contato excluído com sucesso!';
    
    include 'telas/mensagem.php';
}

function editar(){
    
    $id = $_GET['id'];
    $contatos = file('dados/contatos.csv'); //Lê um arquivo csv

    if ($_POST){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        unlink ('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');

        foreach ($contatos as $cadaContato){
            fwrite($arquivo,$cadaContato);
        }

        fclose($arquivo);
        
        $mensagem = 'Pronto, Editado com sucesso!';
        include 'telas/mensagem.php';

    }
    
    $dados = explode(';',$contatos[$id]); //quebra a linha com o separador ;
    include 'telas/editar.php';
}

function relatorio(){
    include 'telas/relatorio.php';
}

function erro404(){
    include 'telas/404.php';
}