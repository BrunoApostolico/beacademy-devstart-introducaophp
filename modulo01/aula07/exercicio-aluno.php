 <?php
$a1 = [
    'nome'=> 'Bruno',
    'email'=>'bapostolico@gmail.com',
    'telefone'=>'2199370-3274',
];

$a2 = [
    'nome'=>'Priscila',
    'email'=>'priscila@gmail.com',
    'telefone'=>'2199363-8628',
];

$a3 = [
    'nome'=>'Eloah',
    'email'=>'eloah@gmail.com',
    'telefone'=>'2199363-8628',
];

$a4 = [
    'nome'=>'Gabriel',
    'email'=>'gabriel@gmail.com',
    'telefone'=>'2199363-8628',
];

$alunos = [
     $a1,
     $a2,
     $a3,
     $a4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
<h1 class="mt-5">Alunos</h1>
<hr>
<table border=1 class="table table-hover table-striped mt-5">
    <thead class="table-dark">
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