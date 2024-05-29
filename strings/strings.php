<?php
/*$palabra = 'abcdef';
var_dump($palabra);
$palabra[2] = 'z';
var_dump($palabra);
*/

$cuento = "Test, Springtime paints the world in vibrant hues, awakening nature from its winter slumber. Blossoming flowers infuse the air with delicate fragrances, while birds return, filling the sky with their cheerful melodies. The warming sun invites people outdoors, where parks and gardens come alive with families and friends enjoying picnics and strolls. Trees don fresh, green foliage, creating a lush canopy overhead. Spring is a season of renewal and growth, a reminder of nature's resilience and beauty. It's a time to embrace new beginnings, savoring the simple pleasures of longer days and the promise of summer just around the corner.";
$arrayCuento = explode(" ", $cuento);
print_r(count($arrayCuento));
