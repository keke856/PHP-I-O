<?php 

  $arquivos = fopen("cursos.txt", "r");


   //https://www.youtube.com/watch?v=ZRYMzS97HVQ  video sobre filtros

   //https://github.com/CViniciusSDias/curso-streams/blob/master/MeuFiltro.php caso apresente erro return PSFS_FEED_ME 

  //Letra em maiúscula

  stream_filter_append( $arquivos,'string.toupper');

  echo fread($arquivos, filesize("cursos.txt"));