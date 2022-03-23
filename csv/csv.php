<?php

    $cusos =  file("cursos.txt");
    $cursosTecnologia = file("cursos.txt");

   $arquivo = fopen('teste.csv','w');

  foreach($cusos as $curso)
  {

    $linha = [trim(utf8_decode($curso) ),"sim"];

    fputcsv($arquivo,$linha,";");
  }



  foreach($cursosTecnologia as $tecnologia)
  {

    $linha = [trim(utf8_decode($tecnologia)),"não"];

// utf8_decode deixa em uma tabela universal
//utf8_encode() volta o arquivo para utf8 

    fputcsv($arquivo,$linha,";");
  }


  fclose($arquivo);

 
  $file = fopen('teste.csv','r');

      while(! feof($file))
      {
      $data =fgetcsv($file);
      print_r($data);
      }
   
  fclose($file);
