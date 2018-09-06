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
  
  // say('<a href="?guess=1024">guess</a>');
  say('<a href="./index.php">basic</a>');
  
  if ($_GET) {
      $guess = $_GET["guess"];
  } else {
      say("Missing guess parameter.");
      say('<a href="?guess=\'hello\'">non-numerical guess param</a>');
      $guess = null;
  }
  // $guess = $_GET["guess"];
  echo($guess);

  

  echo("<pre>");

  print_r($_GET);
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>