<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if ($_POST['id'] > 0) {
        $sql = "UPDATE cliente SET nome='".$_POST['nome']."', "
                . "data_nascimento='".$_POST['datanasc']."', "
                . "telefone=".$_POST['telefone'].", "
                . "email='".$_POST['email']."' "
                . "WHERE id=".$_POST['id'];
    } else {
        $sql = "INSERT INTO cliente (nome, data_nascimento, telefone, email)
         VALUES ('".$_POST['nome']."', "
                . "'".$_POST['datanasc']."', "
                . "".$_POST['telefone'].", "
                . "'".$_POST['email']."')";

    }
    if ($dbcon->exec($sql) === false){
        echo '{"status": "erro"}';
    } else {
        echo '{"status": "ok"}';
    }
} elseif ($_SERVER["REQUEST_METHOD"] === 'GET') {

    $sql = "SELECT * FROM cliente WHERE id='".$_GET['id']."'";
    
    $resultado = $dbcon->query($sql);
    
    echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
}