<?php 


 $arquivo  =  fopen("cursos.txt","r");


 while(!feof($arquivo)){
    echo $linha  = fgets($arquivo).PHP_EOL;
 }

 fclose($arquivo);