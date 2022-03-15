<?php
// https://www.php.net/manual/pt_BR/function.file-put-contents.php

$txt = "\n Engenharia Mecanica";
 file_put_contents("cursos.txt",$txt,FILE_APPEND);