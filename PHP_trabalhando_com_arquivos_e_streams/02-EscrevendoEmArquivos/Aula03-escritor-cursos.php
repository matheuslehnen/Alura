<?php

//$arquivo = fopen('cursos-php.txt', 'w'); //File Open to write. Posiciona o cursor no inicio e sobrescreve
$arquivo = fopen('cursos-php.txt', 'a'); //File Open to write. Posiciona o cursor no final e apensa.

$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

fwrite($arquivo, $curso);

fclose($arquivo);