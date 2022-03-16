<?php

//WAPPER DE STREAM PHP https://dias.dev/2020-11-03-wraper-de-streams-php/

// Forma mais completa


//trim remove espaço no começo e no final

 $terminal = fopen("php://stdin",'r');

 $novoTxt = trim(fgets( $terminal));

 file_put_contents("curso.txt"," \n $novoTxt",FILE_APPEND);

 // resumido  colocando p STDIN no fgets por padrão já inclui no fopen("php://stdin",'r');

 
 $novoTxt = fgets(STDIN);

 file_put_contents("curso.txt"," \n $novoTxt",FILE_APPEND);