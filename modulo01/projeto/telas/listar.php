<h1>Listar</h1>

<?php //var_dump($contatos); ?>

<table class="table table-hover table-striped">
<thead class="table table-dark">
<tr>
<th>Nome</th>
<th>E-mail</th>
<th>Telefone</th>    
<th>Ações</th>    
</tr>
</thead>
<tbody>
    <?php
        foreach ($contatos as $posicao => $cadaContato)
        {
            $partes = explode(';', $cadaContato); //Faz a separação da string por algum caractere especial, nesse caso o ;

            echo '<tr>';
                echo '<td>' .$partes[0]. '</td>';
                echo '<td>' .$partes[1]. '</td>';    
                echo '<td>' .$partes[2]. '</td>';
                
                echo "<td> 
                <a href='/excluir?id={$posicao}' class='btn btn-danger btn-sm'>Excluir</a>
                <a href='/editar?id={$posicao}' class='btn btn-warning btn-sm'>Editar</a> 
                </td>";
            
            echo '</tr>';

        }
    ?>
  
</tbody>
</table>