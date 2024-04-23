<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <div class="container">
        <span>Verduleria pepe</span>
        <h1>Consumo final, Bananas y Manzanas</h1>
    </div>
    <div class="container flex-container pricing-form">
        <?php 
                $getBanana = 0;
                $getManzana = 0;
                $precioPorKgBanana = 200;
                $precioPorKgManzana = 700;

                if (isset($_GET['submit'])) {
                    $getBanana = (int)$_GET['banana'];
                    $getManzana = (int)$_GET['manzana'];
                }

                $precioFinalBanana = $getBanana * $precioPorKgBanana;
                $precioFinalManzana = $getManzana * $precioPorKgManzana;
                $precioTotal = $precioFinalBanana + $precioFinalManzana;
        ?>
        <form action="" method="get">
            <input type="number" name ="banana" placeholder="Bananas" min="0">
            <input type="number" name="manzana" placeholder="Manzanas" min="0">
            <input type="submit" value="submit" name="submit" id="submitBtn">
        </form>
        <div>
            <p><?php echo "El precio de bananas por kg es de: $$precioPorKgBanana"?></p>
            <p><?php echo "El precio de bananas por kg es de: $$precioPorKgManzana"?></p>
        </div>
    </div>
    <div class="container flex-container">
            <h3>A continuacion se detallan los totales de sus compras:</h3>
            <p><?php echo "Su precio por kg de bananas ingresado es: <strong>$$precioFinalBanana</strong>"?></p>
            <p><?php echo "Su precio por kg de manzanas ingresado es: <strong>$$precioFinalManzana</strong>"?></p>
            <p><?php echo "El precio total seria de <strong>$$precioTotal<strong>";?></p>
    </div>
    </main>
</body>
</html>