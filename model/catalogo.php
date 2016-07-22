  
<?php

$strcon = 'sqlite:locadora.sqlite';

$dbcon = new PDO($strcon);

$sql = 'SELECT * FROM catalogo';

$retorno = $dbcon->query($sql);

$listaFilmes = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($listaFilmes);
