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
      echo("<p>" . $i . "</p>");
  }
  

  $mixedArray = array();
  $mixedArray[] = "elf";
  $mixedArray[] = "rogue";
  $mixedArray["weapon"] = "longbow";

  echo("<pre>");

  print_r($mixedArray);
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>