<?php

$arquivo = fopen("cursos.txt", "w");

    $curso  = "Engenharia Civil";

   fwrite($arquivo, $curso);

   fclose($arquivo);
  