<?php
/**
 * Created by PhpStorm.
 * User: dev05
 * Date: 24/04/2018
 * Time: 09:01
 */

    session_start();
    $db = mysqli_connect('localhost', 'root', '','crudXML');

    // variaveis

    $nome = '';
    $estado = '';
    $email = '';
    $valor = '';
    $update;
    $id_client = 0;


    if(isset($_POST['submit'])) {

        $nome = ($_POST['name']);
        $estado = ($_POST['estado']);
        $email = ($_POST['email']);
        $valor = ($_POST['valor']);


        $query = "INSERT into banco (nome, estado, email, valor) VALUES ('$nome', '$estado', '$email', '$valor')";

        $insert = mysqli_query($db, $query);
        $_SESSION['message'] = "Cliente incluído com sucesso";


        header('location: index.php');

    }



         ?>
            
