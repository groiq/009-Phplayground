<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPlayground</title>
  </head>
  <body>
  <?php
  
  function validate(int $param) {
      echo $param;
  }
  
  validate("hello");
  validate(2);
  

  ?>
 
  </body>
</html>