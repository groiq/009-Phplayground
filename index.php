<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPlayground</title>
  </head>
  <body>
  <?php
  
  function makeParagraph($i) {
      echo("<p>" . $i . "</p>");
  }
  
  $i = "./included.php";
  
  for($c = 0; $c < 6; $c++) {
      makeParagraph($c);
      if ($c % 2) {
         include($i);
      } else {
          include_once($i);
      }
  }
  

  echo("<pre>");

  
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>