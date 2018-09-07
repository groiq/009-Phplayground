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
  
  $globalVar = "global variable";
  
  function outerFunction() {
      
      $outerVar = "outer variable";
      
      function innerFunction() {
          $innerVar = "inner variable";
          say("inner function here");
          global $globalVar;
          global $outerVar;
          say($globalVar);
          say($outerVar);
          say($innerVar);
      }
      
      innerFunction();
      
  }
  
  outerFunction();

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  

  
  echo("</pre>");
  
  ?>
 
  </body>
</html>