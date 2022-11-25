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
                <th>Titre</th>
                <th>Auteur</th>
                <th>type</th>
                <th>Date</th>
                <th>statut</th>
            </tr>
            <?php foreach ($demande as $val):  ?>
                        <tr>
                            <td><?=$val["code"]  ?> </td>
                            <td><?=$val["titre"]  ?> </td>
                            <td><?=$val["auteur"]  ?> </td>
                            <td><?=$val["type"]  ?> </td>
                            <td><?=$val["date"]  ?> </td>
                            <td><?=$val["statut"]  ?> </td>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>