<?php 
  echo "Escoge la primera fecha \n";
$dia1 = readline("Dia: \n");
$mes1 = readline("Mes (En numero): \n");
$anio1 = readline("Año (ejem: 2024): ");

echo "Escoge la segunda fecha \n";
$dia2 = readline("Dia: \n");
$mes2 = readline("Mes (En numero): \n");
$anio2 = readline("Año (ejem: 2024): ");


    $fecha = new DateTime("$anio1-$mes1-$dia1");
    $fecha1 = new DateTime("$anio2-$mes2-$dia2");
    echo "La fecha es: " . $fecha->format('Y-m-d') . "\n";
    echo "La fecha es: " . $fecha1->format('Y-m-d') . "\n";

    $diferencia = $fecha->diff($fecha1);

    echo "diferencia: ". $diferencia->format('%R%a dias');







/*  $datetime1 = new DateTime('2005-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a días');*/
  




?>
