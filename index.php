<?php
  $start = 1;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex4</title>
  </head>
  <body>
    <p>
      <?php
        while ($start < 10) {
          echo $start;
          $start = $start + $start / 2;
        }
       ?>
    </p>
  </body>
</html>
