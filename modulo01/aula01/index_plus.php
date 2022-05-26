 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input name="nome" placeholder="Nome"> <br/>
    <input name="cidade" placeholder="Cidade"> <br/>
    <button>Enviar</button>
</form> 

<?php
    
     if (isset($_REQUEST['nome'])) { //Se existir alguma informação dentro do POST
        echo "Oi ".$_REQUEST['nome'];
      } 

?>