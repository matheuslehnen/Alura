<?php

$arquivo = fopen('lista-cursos.txt', 'r'); //File Open
$tamanhoDoArquivo = filesize('lista-cursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo); //File Read
echo $cursos;

fclose($arquivo); //File Close
