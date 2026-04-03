<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Divs Par e Impar</title>
    <style>

    </style>
</head>
<body>

<?php
$cantidad = rand(10, 30);
for ($i = 1; $i <= $cantidad; $i++) {
    if ($i % 2 == 0) {
        echo "<div class='PAR'>Div $i: PAR</div>";
    } else {
        echo "<div class='IMPAR'>Div $i: IMPAR</div>";
    }
}
?>
<div class="final">Final de página</div>

</body>
</html>
