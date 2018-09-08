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
      
      if (gettype($elements) == "string") {
          $elements = str_split($elements);
      }
      
      $allPermutations = array();
      // print_r($allPermutations);
      // say("list of permutations is initialized empty.");
      
      $elemIsUsed = array();
      foreach($elements as $position) {
          $elemIsUsed[$position] = 0;
      }
      // print_r($elemIsUsed);
      // say("make an array to track whether an element is already assigned to a position.");
      
      $permutationBlueprint = array();
      for ($i=0; $i < sizeof($elements); $i++) {
          $permutationBlueprint[] = 0;
      }
      // print_r($permutationBlueprint);
      // say("generate a permutation blueprint; list with a slot for each element, each slot is set to a placeholder");
      
      
      
      $allValuesForPos = function($pos) use(&$elements,&$permutationBlueprint,&$elemIsUsed,&$allValuesForPos,&$allPermutations) {
          // say("fill pos $pos with each value in succession");
          
          foreach($elements as $elemIndex => $element) {
              if ($elemIsUsed[$element]==0) {
                  // say("loop: $elemIndex as $element");
                  $elemIsUsed[$element] = 1;
                  // print_r($elemIsUsed);
                  // say("element now marked as used");
                  $permutationBlueprint[$pos] = $element;
                  // print_r($permutationBlueprint);
                  // say("slot element $element into current permutation at $pos");
                  if ($pos < (sizeof($elements)-1)) {
                      // say("not yet at last position, so recurse");
                      $allValuesForPos($pos+1);
                  } else {
                      // print_r($permutationBlueprint);
                      $allPermutations[] = $permutationBlueprint;
                      // print_r($allPermutations);
                      // say("at last position, so add blueprint to list of permutations");
                      // foreach($permutationBlueprint as $slot => $bla) {
                          // $permutationBlueprint[$slot] = 0;
                      // }
                      // say("empty permutation blueprint, just to be clean (actually unnecessary!) (buggy!!!)");
                  }
                  $elemIsUsed[$element] = 0;
              }
              
          }
          
      };
      
      $allValuesForPos(0);
      // print_r($allPermutations);
      
      
      
      return $allPermutations;
      
  }
  
  function stringifyPermutations($permutationList) {
      $result = array();
      foreach($permutationList as $permIndex => $permutation) {
          // print_r($permutation);
          $permutationString = "";
          foreach($permutation as $elemIndex => $element) {
              $permutationString .= $element;
          }
          // say($permutationString);
          $result[] = $permutationString;
      }
      // print_r($result);
      return $result;
  }
  
  
  // $elements = ["a","b","c"];
  $elements = "abc";
  
  

  echo("<pre>");

  // output arrays here, with print_r or var_dump
  // say("element list:");
  // print_r($elements);
  // say("permutation list:");
  $permutationList = permutations($elements);
  $permutationList = stringifyPermutations($permutationList);
  print_r($permutationList);
  
  
  echo("</pre>");
  
  ?>
 
  </body>
</html>