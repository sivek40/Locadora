<?php

$filme['nome']  = 'Star Wars IV';
$filme['categoria'] = 'Ficção';
$filme['sinopse'] = 'Altas aventuras no espaço';
$filme['ano'] = '1978';
$filme['tipo'] = 'catalogo';
$filme['media'] = 'DVD';
$filme['disponivel'] = 3;

$listaFilmes[] = $filme;

$filme['nome']  = 'O cão e a raposa';
$filme['categoria'] = 'Desenho';
$filme['sinopse'] = 'Aventuras de um cão e sua amiga raposa';
$filme['ano'] = '1960';
$filme['tipo'] = 'catalogo';
$filme['media'] = 'DVD';
$filme['disponivel'] = 4;

$listaFilmes[] = $filme;

$filme['nome']  = 'O fugitivo';
$filme['categoria'] = 'Ação';
$filme['sinopse'] = 'Sobre um médico que foge da prisão para provar sua inocência';
$filme['ano'] = '1988';
$filme['tipo'] = 'catalogo';
$filme['media'] = 'DVD';
$filme['disponivel'] = 2;

$listaFilmes[] = $filme;

$filme['nome']  = 'Que não saiu ainda';
$filme['categoria'] = 'Comédia';
$filme['sinopse'] = 'Não se sabe do que se trata';
$filme['ano'] = '2016';
$filme['tipo'] = 'lançamento';
$filme['media'] = 'DVD';
$filme['disponivel'] = 15;

$listaFilmes[] = $filme;

echo json_encode($listaFilmes);