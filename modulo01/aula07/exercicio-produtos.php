<?php

$prod1 = [
    'nome' => 'TECLADO',
    'preco' => 'R$ 6.399,00',
    'descricao' => 'TECLADO SINTETIZADOR YAMAHA MX61',
    'foto' => "<img width='200px' src=teclado.jpg>",
];

$prod2 = [
    'nome' => 'GUITARRA',
    'preco' => 'R$ 1.699,00',
    'descricao' => 'GUITARRA LES PAUL',
    'foto' => "<img width='200px' src=guitarra.png>",
];

$prod3 = [
    'nome' => 'BATERIA',
    'preco' => 'R$ 3.999,00',
    'descricao' => 'BATERIA ACÚSTICA PEARL',
    'foto' => "<img width='200px' src=bateria.png>",
];

$prod4 = [
    'nome' => 'CONTRA BAIXO',
    'preco' => 'R$ 2.299,00',
    'descricao' => 'CONTRA BAIXO 5 CORDAS',
    'foto' => "<img width='200px' src=baixo.png>",
];

$prod5 = [
    'nome' => 'MESA DE SOM',
    'preco' => 'R$ 14.699,00',
    'descricao' => 'MESA DE SOM MACKIE MCU PRO AUDIO',
    'foto' => "<img width='200px' src=mesadesom.png>",
];

$produtos = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,
];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
<h1 class="mt-5" align="center">Instrumentos Musicais</h1>
<hr>
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark" align="center">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        foreach ($produtos as $cadaProduto) {
          echo "<tr>";
            echo '<td>'.$cadaProduto['nome'].'</td>';
            echo '<td>'.$cadaProduto['preco'].'</td>';
            echo '<td>'.$cadaProduto['descricao'].'</td>';
            echo '<td>'.$cadaProduto['foto'].'</td>';
          echo "</tr>";
         
        }
        ?>
    </tbody>
</table>
</div>