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
            color: white;
        }
        body{
            height: 100vh;
            width: 100vw;
            background-color: #25be5b;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        section{
            padding: 20px;
            border: 2px white solid;
            border-radius: 15px;
        }
        section>form{
            display: flex;
            flex-direction: column;
            justify-self: center;
            align-items: center;
            margin: 10px;
        }
        section>form>textarea{
            margin: 10px;
            padding: 20px;
            border-radius: 15px;
            color: black;
        }
        input[type="submit"]{
            color: black;
            border: 0;
            padding: 5px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <?php
    /*$palabra = 'abcdef';
    var_dump($palabra);
    $palabra[2] = 'z';
    var_dump($palabra);
    */
    if(isset($_POST['submit'])) {
        $cuentoMostrar = $_POST['text-cuento'];
        $contador = explode(" ", $cuentoMostrar);
    }
    ?>
    <section>
        <form action="" method="post" id="formulario">
            <label for="text-cuento">Ingrese su texto</label>
            <textarea name="text-cuento" cols="30" rows="5" maxlength="700" placeholder="Ingrese su texto..."></textarea>
            <input type="submit" name="submit" value="Aceptar"></input>
        </form>
        <?php if (count($contador) > 100 || strlen($cuentoMostrar) > 700): ?>
            <p><?php echo 'su cuento no cumple con los requisitos';?></p>
        <?php endif;?>
        <?php if(count($contador) <= 100) : ?>
            <p><?php echo 'su cuento cumple con los requisitos'?></p>
        <?php endif;?>
    </section>
</body>
</html>

