<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <span>Verduleria pepe</span>
    <h1>Consumo final</h1>
    <p>A continuacion se detallan los totales de sus compras</p>
    <div>
    <?php 
        $banana = 2;
        $manzanas = 5;
        $precioPorKgBanana = 200;
        $precioPorKgManzana = 700;
        $precioFinalBananas= $banana * $precioPorKgBanana;
        $precioFinalManzanas= $manzanas * $precioPorKgManzana;
        $precioTotal = $precioFinalBananas + $precioFinalManzanas;

        echo "El precio de bananas por kg es de: $$precioPorKgBanana, sus kg ingresados son $banana <br>" . 
        "El precio de manzanas por kg es de: $$precioPorKgManzana, sus kg ingresados son $manzanas <br>" .
        "El precio total seria de $$precioTotal"; 

    ?>
    </div>    
    </main>
</body>
</html>