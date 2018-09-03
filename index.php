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
  
  foreach ($replacement as $old=>$new) {
      $races[array_search($old,$races)] = $new;
  }


  echo("<pre>");
  print_r($races);
  echo("</pre>");
  
  ?>
 
  </body>
</html>