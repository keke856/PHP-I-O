<?php
   
   $cursos = file_get_contents('cursos.txt');

   echo $cursos;


   // Forma de Array

   $cursos = file('cursos.txt');
var_dump($cursos) ;