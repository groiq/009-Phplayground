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
      
      $elemIsUsed =  array();
      foreach ($elements as $position) {
          $elemIsUsed[$position] = 0;
      }
      print_r($elemIsUsed);
      
      function allValuesForPos($pos) {
          global $elements, $elemIsUsed;
          echo("here" . $elemIsUsed);
          var_dump($elemIsUsed);
          // echo($elements);
           foreach($elements as $elemPos => $value) {
              if (! $elemIsUsed[$elemPos] ) {
                  $elemIsUsed[$elemPos] = 1;
                  // var_dump($elemIsUsed);
                  // do more stuff
                  $elemIsUsed[$elemPos] = 0;
              }
          } 
      }
      
      allValuesForPos(0);

      
      return $elements;
      
  }
  
  
  /*
  Loop through contents of array.
  Set up 
  
  
  
  */
  
  
  $elements = ["a","b","c"];
  

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  // print_r($elements);
  print_r(permutations($elements));
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>