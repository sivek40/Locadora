<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    
    var_dump($_FILES)

    if ($_POST['id'] > 0) {
        $sql = "UPDATE catalogo SET nome='".$_POST['nome']."', "
                . "sinopse='".$_POST['sinopse']."', "
                . "ano=".$_POST['ano'].", "
                . "tipo='".$_POST['tipo']."', "
                . "midia='".$_POST['midia']."', "
                . "disponivel=".$_POST['disponivel'].", "
                . "categoria='".implode(',',$_POST['categoria'])."' "
                . "WHERE id=".$_POST['id'];
    } else {
        $sql = "INSERT INTO catalogo (nome, sinopse, ano, tipo, midia, disponivel, categoria)
         VALUES ('".$_POST['nome']."', "
                . "'".$_POST['sinopse']."', "
                . "".$_POST['ano'].", "
                . "'".$_POST['tipo']."', "
                . "'".$_POST['midia']."', "
                . "".$_POST['disponivel'].", "
                . "'".implode(',',$_POST['categoria'])."')";

    }
    if ($dbcon->exec($sql) === false){
        echo '{"status": "erro"}';
    } else {
        echo '{"status": "ok"}';
    }
} elseif ($_SERVER["REQUEST_METHOD"] === 'GET') {

    $sql = "SELECT * FROM catalogo WHERE id='".$_GET['id']."'";
    
    $resultado = $dbcon->query($sql);
    
    echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
}