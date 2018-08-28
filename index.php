<?php
$date = new DateTime('2016-05-16');
$today = new DateTime();
$space = $date->diff($today);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5/9</title>
    </head>
    <body>
        <p><?= $space->format('%R%a'); ?> Jours.</p>
    </body>
</html>