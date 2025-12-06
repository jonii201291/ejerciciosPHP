<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 1 - Ejercicio 3: Superglobals</title>
  <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
  <h1>Variables predefinidas y superglobales. Diversas formas de visualizar</h1>
  <?php

  // https://www.php.net/manual/es/reserved.variables.files.php
  // https://es.stackoverflow.com/questions/72719/cu%c3%a1l-es-la-diferencia-entre-echo-print-print-r-var-dump-y-var-export-en-php


  echo "<h2>En forma de lista recorriendo clave a clave _SERVER</h2>";

  echo "<ul><li>Server ROOT:  ", $_SERVER['DOCUMENT_ROOT'];
  echo "</li><li>Server SELF:  ", $_SERVER['PHP_SELF'];
  echo "</li><li>Server NAME:  ", $_SERVER['SERVER_NAME'];
  echo "</li><li>Server ADDR:  ", $_SERVER['SERVER_ADDR'];
  echo "</li><li>Server PORT:  ", $_SERVER['SERVER_PORT'];
  echo "</li><li>Server REQUEST METHOD:  ", $_SERVER['REQUEST_METHOD'];
  echo "</li><li>Server PROTOCOL:  ", $_SERVER['SERVER_PROTOCOL'];
  echo "<li>HTTP HOST:  ", $_SERVER['HTTP_HOST'];
  echo "</li><li>HTTP USER AGENT:  ", $_SERVER['HTTP_USER_AGENT'];
  echo "</li><li>Server REMOTE ADDRESS:  ", $_SERVER['REMOTE_ADDR'];
  echo "</li><li>Server SCRIPT FILENAME:  ", $_SERVER['SCRIPT_FILENAME'];
  echo "</li><li>Server REQUEST URI:  ", $_SERVER['REQUEST_URI'];
  echo "</li></ul>";

  echo "<h2>Superglobal SERVER Con var_dump</h2>";
  echo var_dump($_SERVER);

  echo "<h2>Con print_r</h2>";
  echo print_r($_SERVER);

  // un avance de foreach (ejercicio 5)
  echo "<h2>Con foreach (y completando tipo con gettype</h2>";
  foreach ($_SERVER as $key => $value) {
    echo gettype($_SERVER[$key]), " ", $key, " => ", $value, "<br>";
  }
  ?>
</body>

</html>