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
          // say('$elemIsUsed[$position] = 0;');
          $elemIsUsed[$position] = 0;
      }
      // print_r($elemIsUsed);
      
      $allValuesForPos = function($pos) use($elemIsUsed,$elements) {
          // say("allValuesForPos: fill a given position with each value in succession.");
          // print_r($elemIsUsed);
          // print_r($elements);
          // var_dump($elemIsUsed);
           foreach($elements as $elemPos => $value) {
              if (! $elemIsUsed[$value] ) {
                  $elemIsUsed[$value] = 1;
                  say("$value marked as used on position $pos:");
                  print_r($elemIsUsed);
                  
                  // var_dump($elemIsUsed);
                  // do more stuff
                  $elemIsUsed[$value] = 0;
              }
          } 
          // say('/allValuesForPos');
      };
      
      $allValuesForPos(0);

      // say("---------------");
      return $elements;
      
  }
  
  
  /*
  Loop through contents of array.
  Set up 
  
  
  
  */
  
  
  $elements = ["a","b","c"];
  

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  // say("element list:");
  // print_r($elements);
  // say("permutation list:");
  // print_r(permutations($elements));
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>