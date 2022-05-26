 <form action="" method="POST">
    <input name="nome" placeholder="Nome"> <br/>
    <input name="cidade" placeholder="Cidade"> <br/>
    <button>Enviar</button>
</form> 

<?php
    
     if ($_POST) { //Se existir alguma informação dentro do POST
        echo "Oi ".$_POST['nome'];
      } 
?>