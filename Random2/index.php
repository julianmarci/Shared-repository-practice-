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
        div {
            padding: 8px;
            margin: 5px;
            border: 1px solid #444;
            width: fit-content;
            font-family: Arial, sans-serif;
        }
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

<div style="margin-top:20px; background:#eee; padding:10px;">
    Final de página
</div>

</body>
</html>
