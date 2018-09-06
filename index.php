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
  say('<a href="./index.php">go to this site without a $_GET</a>');
  
  $wanted = 1024;
  
  $guess = $_GET["guess"] ?? "none";
  $msg = "";
  $link = "";
  
  
  if ($guess === "none") {
      $msg = "no parameter set";
      $next = "hello";
     
  } 
  
  say("Finding: $msg. Let's try this value next: <a href=\"?guess=$next\">$next</a>");

  

  echo("<pre>");

  print_r($_GET);
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>