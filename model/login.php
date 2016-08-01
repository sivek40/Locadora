<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './dbconnect.php';
/*
$sql = "SELECT * FROM usuario WHERE login='".$_POST['username']."' AND senha = '".$_POST['password']."'";

$resultado = $dbcon->query($sql);
$usuario = $resultado->fetch(PDO::FETCH_ASSOC);
*/

$sql = "SELECT id, nome FROM usuario WHERE login=? AND senha = ?";

$salt = 'tertulio';
$password = sha1($salt.$_POST['password']);

$prepare = $dbcon->prepare($sql);
$prepare->execute(array($_POST['username'], $password));
$usuario = $prepare->fetch(PDO::FETCH_ASSOC);

if ($usuario != false) {
    $time = (isset($_POST['remember']))? mktime() + (7 * 24 * 60 * 60) : 0;
    //setcookie('locadora', 'logado', $time, '/');
    setcookie('locadora', json_encode($usuario), $time, '/');
    //header('Location: ../index.php');
    echo '{"status":"ok"}';
} else {
    //echo 'usuário ou senha inválidos!';
    echo '{"msg":"Usuário ou senha incorretos!", "status":"erro"}';
}


die();
    
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if ($_POST['id'] > 0) {
        $sql = "UPDATE usuario SET nome='".$_POST['nome']."', "
                . "sinopse='".$_POST['sinopse']."', "
                . "ano=".$_POST['ano'].", "
                . "tipo='".$_POST['tipo']."', "
                . "midia='".$_POST['midia']."', "
                . "disponivel=".$_POST['disponivel'].", "
                . "categoria='".implode(',',$_POST['categoria'])."', "
                . "imagem_nome='".$file_name."' "
                . "WHERE id=".$_POST['id'];
    } else {
        $sql = "INSERT INTO usuario (nome, sinopse, ano, tipo, midia, disponivel, categoria, imagem_nome)
         VALUES ('".$_POST['nome']."', "
                . "'".$_POST['sinopse']."', "
                . "".$_POST['ano'].", "
                . "'".$_POST['tipo']."', "
                . "'".$_POST['midia']."', "
                . "".$_POST['disponivel'].", "
                . "'".implode(',',$_POST['categoria'])."', "
                . "'".$file_name."') ";

    }
    if ($dbcon->exec($sql) === false){
        echo '{"status": "erro"}';
    } else {
        echo '{"status": "ok"}';
    }
        
} elseif ($_SERVER["REQUEST_METHOD"] === 'GET') {

    $sql = "SELECT * FROM usuario WHERE id='".$_GET['id']."'";
    
    $resultado = $dbcon->query($sql);
    
    echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
}