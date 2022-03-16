<?php

// STDOUT Exibe dados na tele é considerada stream

//   stream_copy_to_stream() copia dados de uma stream para outra


  $dados = fopen("curso.txt",'r');

  stream_copy_to_stream($dados , STDOUT);