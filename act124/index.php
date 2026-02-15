<?php
// Definimos dos números para comparar
$numero1 = 10;
$numero2 = 20;
// Estructura IF
echo "<h2>Ejemplo con IF</h2>";
if ($numero1 < $numero2) {
 echo "El número $numero1 es menor que $numero2";
}
// Estructura IF-ELSE
echo "<h2>Ejemplo con IF-ELSE</h2>";
if ($numero1 > $numero2) {
 echo "El número $numero1 es mayor que $numero2";
} else {
 echo "El número $numero1 NO es mayor que $numero2";
}
// Estructura IF-ELSEIF-ELSE con temperatura
$temperatura = 15;
echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>";
if ($temperatura > 30) {
 echo "Hace mucho calor 🥵";
} elseif ($temperatura >= 15 && $temperatura <= 30) {
 echo "El clima es agradable 😊";
} else {
 echo "Hace frío 🥶";
}



//Codigo para temperaturas bajo cero
$temperatura = -5;
echo "<h2>Ejemplo para temperaturas bajo cero</h2>";
if ($temperatura < 0) {
 echo "Estamos bajo 0 🥶";
} 
elseif ($temperatura >= 0 && $temperatura <= 15) {
 echo "El clima es fresco 🌬️";
} 
else {
 echo "El clima es cálido ☀️";
}

//Añadidos personales para el ejercicio
$temperatura_kelvin = 300;
echo "<h2>Ejemplo con temperatura en Kelvin</h2>";
if ($temperatura_kelvin > 373.15) {
    echo "El agua está en estado gaseoso 💨";
    } elseif ($temperatura_kelvin >= 273.15 && $temperatura_kelvin <= 373.15) {
    echo "El agua está en estado líquido 💧";
    } else {
    echo "El agua está en estado sólido ❄️";
    }

$temperatura_farenheit = 20;
    echo "<h2>Ejemplo con temperatura en Farenheit</h2>";
    if ($temperatura_farenheit > 212) {
        echo "El agua está en estado gaseoso 💨";
        } elseif ($temperatura_farenheit >= 32 && $temperatura_farenheit <= 212) {
        echo "El agua está en estado líquido 💧";
        } else {
        echo "El agua está en estado sólido ❄️";
        }
?>