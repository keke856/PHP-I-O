<?php  


  $arquivo  = fopen("cursos.txt", "r");

  $tamanhoArquivo = filesize("cursos.txt");

  // ler arquivo de uma vez
 fread($arquivo,$tamanhoArquivo);


   fclose($arquivo);