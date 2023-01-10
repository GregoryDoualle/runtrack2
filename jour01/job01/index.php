<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "LaPlateforme";
    echo $str."<br>";
    $str2 = "Vive";
    echo $str2."<br>";
    $str3 = "!";
    echo $str3."<br>";
    echo $str2. $str. $str3. "<br>";
    
    $val=3;
echo '<p>la variable $val contient la valeur : '.$val;
echo'</p>';
$val=-5;
echo '<p>Maintenant la variable $val contient la valeur : '.$val;
echo'</p>';

$bool1=True;
$bool2=False;

    print('<p>Le premier booléen : bool1</p>');
    var_dump($bool1);    // vardump($variable) permet d'afficher les informations d'une variable : type (valeur)
    print('<p>Le deuxieme booléen : bool2</p>');
    var_dump($bool2);
    ?>
</body>
</html>