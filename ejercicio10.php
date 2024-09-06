<?php

$fecha_y_hora = new DateTime('now');
$fechaVuelo = new DateTime("2024-09-12 12:00:00");


$queda=$fecha_y_hora->diff($fechaVuelo);
echo $queda->format("Fecha vuelo: 2024-09-12 12:00:00... Quedan = Años: %y Meses: %m Dias:%d Horas: %h Minutos: %i Segundos: %s");
?>