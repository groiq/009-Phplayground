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
  
  echo("<h2>Permutation generator</h2>");
  
  function permutations($elements) {
      
      return $elements;
      
  }
  
  
  /*
  Loop through contents of array.
  Set up 
  
  
  
  */
  
  
  $elements = ["a","b","c"];
  

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  print_r($elements);
  print_r(permutations($elements));
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>