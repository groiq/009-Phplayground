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
      // echo("<p>" . $i . "</p>");
      echo($i . "\n\n");
  }
  
  echo("<h2>Permutation generator</h2>");
  
  function permutations($elements) {
      
      $allPermutations = array();
      print_r($allPermutations);
      say("list of permutations is initialized empty.");
      
      $elemIsUsed = array();
      foreach($elements as $position) {
          $elemIsUsed[$position] = 0;
      }
      print_r($elemIsUsed);
      say("make an array to track whether an element is already assigned to a position.");
      
      $permutationBlueprint = array();
      for ($i=0; $i < sizeof($elements); $i++) {
          $permutationBlueprint[] = 0;
      }
      print_r($permutationBlueprint);
      say("generate a permutation blueprint; list with a slot for each element, each slot is set to a placeholder");
      
      say("I need two lists - one generates the current permutation - the other tracks which elements are already in use --");
      
      $allValuesForPos = function($pos) use($elements,$permutationBlueprint,&$allValuesForPos,&$allPermutations) {
          say("fill pos $pos with each value in succession");
          
          foreach($elements as $elemIndex => $element) {
              
          }
          
      };
      
      $allValuesForPos(0);
      
      
      
      return $allPermutations;
      
  }
  
  
  $elements = ["a","b","c"];
  

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  // say("element list:");
  // print_r($elements);
  // say("permutation list:");
  $permutationList = permutations($elements);
  // print_r($permutationList);
  
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>