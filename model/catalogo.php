  
<?php

require_once './dbconnect.php';

if ($_GET['filtro'] == 'disponiveis'){
    $sql = "SELECT * FROM catalogo "
        . "WHERE disponivel > 0";
} elseif ($_GET['filtro'] == 'catalogos'){
    $sql = "SELECT * FROM catalogo "
        . "WHERE tipo = 'Catálogo'";
} elseif ($_GET['filtro'] == 'lancamentos'){
    $sql = "SELECT * FROM catalogo "
        . "WHERE tipo = 'Lançamento'";
} else {
    $sql = "SELECT * FROM catalogo WHERE 1 = 1 ";
}

if (isset($_GET['categoria'])){
    $sql .= " AND categoria LIKE '%".$_GET['categoria']."%'";
}

if (isset($_GET['nome'])){
    $sql .= " AND nome LIKE '".$_GET['nome']."%'";
}

$retorno = $dbcon->query($sql);

$listaFilmes = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($listaFilmes);
