<?php
// defintion de la variable start initialiser a 1
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
      // definition de la boucle grace a while,
      // on reprend la variable et on lu indique que tant qu'elle ne depasse pas 10 on l'affiche
      // pour l'incrémentation du résultat, on reprend la variable start, et on l'addition a la variable divisé par 2
        while ($start < 10) {
          echo $start;
          $start = $start + $start / 2;
        }
       ?>
    </p>
  </body>
</html>
