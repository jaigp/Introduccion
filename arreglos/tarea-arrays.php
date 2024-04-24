<?php 
    $amigos = ['Marcos', 'Dario', 'Juan'];
    $ciudades = ['Montevideo', 'Colonia', 'Salto'];
    shuffle($amigos);
    shuffle($ciudades);
    
    echo $amigos[rand(0, 2)] . " se va de viaje <br>";
    echo $amigos[rand(0, 2)] . " se va de viaje a la bonita ciudad de " . $ciudades[rand(0, 2)];
    
?>