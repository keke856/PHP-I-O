<?php 

  $arquivos = fopen("cursos.txt", "r");


  //Letra em maiúscula

  stream_filter_append( $arquivos,'string.toupper');

  echo fread($arquivos, filesize("cursos.txt"));