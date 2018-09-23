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
  
  for ($i=0; $i<4; $i++) {
      $j = array();
      $j[] = ($i>1);
      $j[] = ($i % 2 != 0);
      $truthTable[] = $j;
  }

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