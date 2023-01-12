<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>jour03/job04</title>
</head>
<body>
   <i>Job04</i>
   <br><br><br>

<?php
   $str = 'Dans l\'espace, personne ne vous entend crier.';
   $cpt = 0;

   for ($i = 0; $i < strlen($str) ; $i++) {
      echo $str[$i] ;
      $cpt++;
   }
   echo $cpt ;
?>
</body>
</html>