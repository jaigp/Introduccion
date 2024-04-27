<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content:center;
            align-items: center;
        }
        section{
            border: 2px black solid;
            border-radius: 14px;
            padding: 2%;
        }
        form>label{
            display:flex;
            flex-direction: column;
        }
        ol{
            margin-top:2%;
            margin-left:6%;
        }
    </style>
</head>
<body>
    <?php 
        $listaCompra = [];
        $listaCompra[] = 'Leche';
        $listaCompra[] = 'Pan';
        $listaCompra[] = 'Huevo';
        $listaCompra[] = 'Queso';
        if (isset($_POST['submit'])) {
            $productoComprado = $_POST['productoAComprar'];
            $listaCompra[$productoComprado] = '<strong>Comprado</strong>';
        }
    ?>
    <section>
        <form action="" method="post">
        <label for="">
            Seleccione el producto a comprar (0-3):
            <input type="number" name="productoAComprar" max="3" min="0">
            <input type="submit" value="Aceptar" name="submit">
        </label>
        </form>
        <ol start="0">
            <li><?php echo $listaCompra[0]?></li>
            <li><?php echo $listaCompra[1]?></li>
            <li><?php echo $listaCompra[2]?></li>
            <li><?php echo $listaCompra[3]?></li>
        </ol>
    </section>
</body>
</html>