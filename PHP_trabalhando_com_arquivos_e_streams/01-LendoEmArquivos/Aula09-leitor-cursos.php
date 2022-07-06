<?php

$arquivo = fopen('lista-cursos.txt', 'r'); //File Open

while (!feof($arquivo)){ // feof = File End of File
    $curso = fgets($arquivo); //File Get String
    echo $curso . PHP_EOL;
}
fclose($arquivo); //File Close
