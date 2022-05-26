<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method=POST>
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="email" placeholder="email">
    <br>
    <button>Enviar</button>
    <br>
</form>
<br>
    <table border=1>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
    </tr>
    <tr>
        <td> <?php echo $_POST['nome'];?> </td>   
        <td> <?php echo $_POST['email'];?> </td> 
    </tr>
    </table>
    

</body>
</html>