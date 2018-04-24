<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Carvalho
 * Date: 23/04/2018
 * Time: 14:47
 */

?>


<!DOCTYPE html>
<html>
<head>


    <title>CRUD</title>
</head>
<body>

<div class="alert alert-sucess">

    <form action="xmlGerado.php" method="post">
        
        <input type="text" name="name" value="" placeholder="Insira o Nome"><br/>

        <input type="text" name="estado" value="<?= $estado['estado'] ?>" placeholder="Estado"><br/>

        <input type="text" name="valor" value="<?= $valor['valor'] ?>" placeholder="Valor"><br/>

        <input type="text" name="email" value="<?= $email['email'] ?>" placeholder="Email"><br/>
<br/>
        <td><button class="btn btn-primary"  type="submit">Submit</button></td>

        
    </form>


</div>

</body>

</html>










