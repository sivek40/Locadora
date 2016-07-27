  
<?php

require_once './dbconnect.php';

$sql = 'SELECT * FROM catalogo';

$retorno = $dbcon->query($sql);

$listaFilmes = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($listaFilmes);
