<h1>Listar</h1>

<?php //var_dump($contatos); ?>

<table class="table table-hover table-striped">
<thead class="table table-dark">
<tr>
<th>Nome</th>
<th>E-mail</th>
<th>Telefone</th>    
</tr>
</thead>
<tbody>
    <?php
        foreach ($contatos as $cadaContato)
        {
            $partes = explode(';', $cadaContato); //Faz a separação da string por algum caractere especial, nesse caso o ;

            echo '<tr>';
                echo '<td>' .$partes[0]. '</td>';
                echo '<td>' .$partes[1]. '</td>';    
                echo '<td>' .$partes[2]. '</td>';
            echo '</tr>';

        }
    ?>
  
</tbody>
</table>