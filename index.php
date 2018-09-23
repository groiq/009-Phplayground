<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPlayground</title>
  </head>
  <body>
  
 
  
  <?php
  
  function say($i) {
      // echo("<p>" . $i . "</p>");
      echo($i . "\n\n");
  }
  
  $truthTable = array();

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  // print_r($elements);
  echo("\nprint_r\n");
  print_r($truthTable);
  echo("\nvar_dump\n");
  var_dump($truthTable);
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>