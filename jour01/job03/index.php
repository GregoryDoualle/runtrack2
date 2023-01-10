<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>job03</title>
</head>
<body>
    <i>Job03</i>
<br><br><br>
    <table>
    <thead>
        <tr>
            <th colspan="1">Nom</th>
            <td colspan="1">Type</td>
            <td colspan="1">Note</td>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>
                <?php
                    $Nom="Ferrari";
                    echo"$Nom";
                ?>
            </td>

            <td>
            <?php
                    $Type="Sportive";
                    echo"$Type";
                ?>
            </td>

            <td>
            <?php
                    $Note=18;
                    echo"$Note";
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <?php
                    $Nom="Lamborghini";
                    var_dump($Nom);
                    echo"$Nom";
                ?>
            </td>

            <td>
            <?php
                    $Type="sportive";
                    var_dump($Type);
                    echo"$Type";
                ?>
            </td>

            <td>
            <?php
                    $Note=19;
                    var_dump($Note);
                    echo"$Note";
                ?>
            </td>
            
        </tr>
        <tr>
            <td>
                <?php
                    $Nom="Harley Davidson";
                    var_dump($Nom);
                    echo"$Nom";
                ?>
            </td>

            <td>
            <?php
                    $Type="Moto";
                    var_dump($Type);
                    echo"$Type";
                ?>
            </td>

            <td>
            <?php
                    $Note=20;
                    var_dump($Note);
                    echo"$Note";
                ?>
            </td>
            
        </tr>
    </tbody>
</table>
</body>
</html>