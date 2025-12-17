<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Groups</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Groups</h1>

    <div class="buttons">
        <button id="btn_red_1">Red 1</button>
        <button id="btn_blue_1">Blue 1</button>
        <button id="btn_yellow_1">Yellow 1</button>

        <button id="btn_red_2">Red 2</button>
        <button id="btn_blue_2">Blue 2</button>
        <button id="btn_yellow_2">Yellow 2</button>

        <button id="btn_red_3">Red 3</button>
        <button id="btn_blue_3">Blue 3</button>
        <button id="btn_yellow_3">Yellow 3</button>

        <button id="btn_red_all">All Red</button>
        <button id="btn_blue_all">All Blue</button>
        <button id="btn_yellow_all">All Yellow</button>

        

    </div>
    <h2>
        Primo Gruppo
    </h2>
    <div class= "group_1">
        <?php
        // Genera un número aleatorio entre 5 y 10
        $cantidadDivs = rand(5, 10);
        // Imprime la cantidad de divs
        for ($i = 0; $i < $cantidadDivs; $i++) {
            echo "<div class='div_group_1'>Div número " . ($i + 1) . "</div>";
        }
        ?>
    </div>
    <h2>
        Secondo Gruppo
    </h2>
    <div class= "group_2">
        <?php
        // Genera un número aleatorio entre 5 y 10
        $cantidadDivs = rand(10, 15);
        // Imprime la cantidad de divs
        for ($i = 0; $i < $cantidadDivs; $i++) {
            echo "<div class='div_group_2'>Div número " . ($i + 1) . "</div>";
        }
        ?>
    </div>
    <h2>
        Terzo Gruppo
    </h2>
    <div class= "group_3">
        <?php
        // Genera un número aleatorio entre 5 y 10
        $cantidadDivs = rand(5, 20);
        // Imprime la cantidad de divs
        for ($i = 0; $i < $cantidadDivs; $i++) {
            echo "<div class='div_group_3'>Div número " . ($i + 1) . "</div>";
        }
        ?>
    </div>

    <script src="00.js"></script>
</body>
</html>
