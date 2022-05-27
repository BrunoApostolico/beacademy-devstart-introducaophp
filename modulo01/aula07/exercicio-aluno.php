<?php
$a1 = [
    'nome'=> 'Bruno',
    'email'=>'bapostolico@gmail',
    'telefone'=>'2199370',
];

$a2 = [
    'nome'=>'Priscila',
    'email'=>'priscila@gmail',
    'telefone'=>'2199363',
];

$alunos = [
     $a1,
     $a2,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">

<table border=1>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        
    </thead>
    <tbody>
        <?php
            
        foreach ($alunos as $cadaAluno){
            echo '<tr>';
                echo '<td>'.$cadaAluno['nome'].'</td>';
                echo '<td>'.$cadaAluno['email'].'</td>';
                echo '<td>'.$cadaAluno['telefone'].'</td>';
            echo '</tr>';
            
        }
        ?>
    </tbody>
</table>
</div>