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
  $replacement = array("elf"=>"norn","dwarf"=>"asura");
  
  foreach ($replacement as $pair) {
      // echo($pair);
      $old = array_search($pair, $replacement);
      // echo($old);
      $races[array_search($old,$races)] = $pair;
  }


  echo("<pre>");
  print_r($races);
  echo("</pre>");
  


  ?>
 
  </body>
</html>