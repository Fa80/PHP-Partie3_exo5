<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie3_Exo5</title>
</head>
<body>

    <?php
//En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.

        $number = 1;
        while($number <=15){ ?>
          <?php $number++; ?>
            <p>  <?php echo $number . " On y arrive presque ";
                  }
    ?></p>
</body>
</html>
