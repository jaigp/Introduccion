<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nombreCompleto = "Juan Perez" 
        /* 
        Falta el punto y coma haciendo que no se pueda ejecutar, 
        pero a parte de eso tiene una buena practica en la separacion de palabras y la asiganacion de valores.
        */
        
        $Edad = 25;
        /*
        Esta bien declarada y asignada, pero una buena practica seria el no empezar las variables con mayuscula.    
        */
        
        $estAtura = 1.75;
        /*
        Bien declarada y asignada, pero preferiblemente que si la variable es una sola palabra que todo este en minuscula.
        */
        
        $numero = "10";
        /*
        La asignacion de variable no es correcta para el uso al que se le quiere dar,
        a parte que el nombre de la variable no es clara para el desarrollador.
        */

        Apellido = 'Fernandez';
        /*
        Preferiblemente que la variable si es una sola palabra este todo en minuscula, sin mencionar que es buena practica iniciar las variables con minuscula;
        Faltaria el signo de "$" para iniciar la variable y para mejorar legibilidad es mejor utilizar las dobles comillas antes que las simples,
        podria el nombre de la variable dar mayor informacion de quen es el apellido.
        */

        pais_de_origen = "Uruguay"
        /*
        Es preferible que las palabras estan separadas por mayusculas antes que guines bajos aunque no este mal,
        falta el signo que inicia la variable "$" y el punto y coma.
        */

        $salario = $2000;
        /*
        Todo bien fuera de que en vez de int tendria que ser un String por el caracter "$",
        o eliminarselo para que sea un int dependiendo para lo que se quiera usar.
        */
    ?>
</body>
</html>