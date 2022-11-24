<?php
require_once("data2.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="contenair">
        <table>
        <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Nombre d'ouvrage</th>
                <th>Nombre d'exemplaire</th>
            </tr>
            <?php foreach ($rayon as $val):  ?>
                        <tr>
                            <td><?=$val["code"]  ?> </td>
                            <td><?=$val["nom"]  ?> </td>
                            <td><?=$val["nombre d'ouvrage"]  ?> </td>
                            <td><?=$val["nombre d'exemplaire"]  ?> </td>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>