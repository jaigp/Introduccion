<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Prueba de comentario I
    echo 'Prueba de comentario II';
    /* Prueba de comentario III*/
    echo <<<END
    Prueba sobre la funcionalidad,
    supuestamente deja un renglon por medio. 
    HOLA que es esto
    END;   ?>
    
    <p>Y esta es la diferenca entre el "parrafo" de arriba y abajo</p>
</body>
</html>