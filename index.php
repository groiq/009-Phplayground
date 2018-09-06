<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPlayground</title>
  </head>
  <body>
  
  <form action="index.php" method="GET">
  <label for="guess">guess</label>
  <input type="text" name="guess" />
  <button type="submit">Submit</button>
  
  </form>
  
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
      $next = "";
  } elseif($guess === "") {
      $msg = "input too short";
      $next = "hello";
  } elseif(!is_numeric($guess)) {
      $msg = "value is not numeric";
      $next = 512;
  } elseif($guess < $wanted) {
      $msg = "number too low";
      $next = 2048;
  } 
      
  
  say("Finding: $msg. Let's try this value next: <a href=\"?guess=$next\">$next</a>");

  

  echo("<pre>");

  print_r($_GET);
  
  var_dump($_GET);
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>