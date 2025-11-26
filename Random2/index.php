<?php
// Número aleatorio de divs entre 10 y 30
$cantidad = rand(10, 30);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Divs Par e Impar</title>
    <style>

    </style>
</head>
<body>

<?php
for ($i = 1; $i <= $cantidad; $i++) {
    if ($i % 2 == 0) {
        echo "<div>Div $i: PAR</div>";
    } else {
        echo "<div>Div $i: IMPAR</div>";
    }
}
?>

<div>
    Final de página
</div>

</body>
</html>
