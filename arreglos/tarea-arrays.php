<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color: white;
            padding: 0;
            margin: 0;
            width:100vw;
            height: 100vh;
            background: linear-gradient(190deg, #000, #00308F);
            display: flex;
            justify-content: center;
            align-content: center;
        }
        section{
            border: 2px white solid;
            border-radius: 14px;
            margin: 20%;
            padding-inline: 50px;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
    </style>
</head>
<body>
    <?php 
        $arrayAmigos = ['Marcos', 'Dario', 'Juan'];
        $arrayCiudades = ['Montevideo', 'Colonia', 'Salto'];
        shuffle($arrayAmigos);
        shuffle($arrayCiudades);
    ?>
    <section>
        <p id="amigo-viaje"> <?php echo $arrayAmigos[rand(0, 2)] . " se va de viaje..." . "<br>";?></p>
        <p id="amigo-ciudad"><?php echo " A la bonita ciudad de " . $arrayCiudades[rand(0, 2)];?></p>
    </section>
</body>
</html>