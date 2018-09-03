<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPlayground</title>
  </head>
  <body>
  <?php
  
  
  $races = array("human","elf","dwarf");
  $charOptions = array("races"=> $races, "professions"=> array("warrior","rogue","mage"));



  echo("<pre>");
  print_r($charOptions);
  echo("</pre>");
  


  ?>
 
  </body>
</html>