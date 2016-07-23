<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$strcon = 'sqlite:locadora.sqlite';

$dbcon = new PDO($strcon);

$sql = "INSERT INTO catalogo (nome, sinopse, ano, tipo, midia, disponivel, categoria)
 VALUES ('".$_POST['nome']."', "
        . "'".$_POST['sinopse']."', "
        . "".$_POST['ano'].", "
        . "'".$_POST['tipo']."', "
        . "'".$_POST['midia']."', "
        . "".$_POST['disponivel'].", "
        . "'".$_POST['categoria']."')";

if ($dbcon->exec($sql) === false){
    echo '{"status": "erro"}';
} else {
    echo '{"status": "ok"}';
}