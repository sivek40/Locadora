<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    
    $dataNasc = explode('/', $_POST['datanasc']);

    if ($_POST['id'] > 0) {
        $sql = "UPDATE cliente SET nome='".$_POST['nome']."', "
                . "data_nascimento='".$dataNasc[2]."-".$dataNasc[1]."-".$dataNasc[0]."', "
                . "telefone='".$_POST['telefone']."', "
                . "email='".$_POST['email']."' "
                . "WHERE id=".$_POST['id'];
    } else {
        $sql = "INSERT INTO cliente (nome, data_nascimento, telefone, email)
         VALUES ('".$_POST['nome']."', "
                . "'".$dataNasc[2]."-".$dataNasc[1]."-".$dataNasc[0]."', "
                . "'".$_POST['telefone']."', "
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