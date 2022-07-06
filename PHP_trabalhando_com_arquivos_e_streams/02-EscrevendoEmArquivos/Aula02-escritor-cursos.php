<?php

$arquivo = fopen('cursos-php.txt', 'w'); //File Open to write

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso);

fclose($arquivo);