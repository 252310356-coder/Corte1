<?php
require 'Automovil.php'; // Incluimos la clase Automovil
// Crear instancias de Automovil
$auto1 = new Automovil("Rojo", "Toyota", 4, false);
$auto2 = new Automovil("Negro", "Ford", 2, true);
$auto3 = new Automovil("Azul", "Honda", 4, false);
$auto4 = new Automovil("Blanco", "Chevrolet", 2, true);
// Mostrar información de los autos
echo "<h2>Información del Automóvil 1</h2>";
echo $auto1->mostrarDatos();
echo "<h2>Información del Automóvil 2</h2>";
echo $auto2->mostrarDatos();
echo "<h2>Información del Automóvil 3</h2>";
echo $auto3->mostrarDatos();
echo "<h2>Información del Automóvil 4</h2>";
echo $auto4->mostrarDatos();

echo "<h2>Información del Automóvil 1 después de cambiar el color</h2>";
echo $auto1->cambio_color("Verde"); // Cambiamos el color del auto1
echo "<h2>Información del Automóvil 3 después de cambiar el color</h2>";
echo $auto3->cambio_color("Amarillo"); // Cambiamos el color del auto3


?>