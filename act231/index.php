<?php
require 'persona.php'; // Incluimos la clase Persona
// Crear instancia de Persona
$persona1 = new Persona("Carlos", -2, "Estudiante", "Madrid", "Española");
// Mostrar información de la persona usando el método presentarse()
echo "<h2>Datos de la Persona</h2>";
echo "<p>" . $persona1->presentarse() . "</p>";
// Modificar la ocupación usando $this->
echo "<p>" . $persona1->cambiarOcupacion("Desarrollador Web") . "</p>";
// Mostrar información actualizada
echo "<p>" . $persona1->presentarse() . "</p>";

echo "<h2>Prueba de método edad</h2>";
$persona2 = new Persona("Ana", 25, "Diseñadora", "Barcelona", "Española");
echo "<p>" . $persona2->presentarse() . "</p>";
$persona3 = new Persona("Luis", -5, "Músico", "Gomez palacio", "Mexicana");
echo "<p>" . $persona3->presentarse() . "</p>";
$persona4 = new Persona("Maria", 30, "Abogada", "Lima", "Peruana");
echo "<p>" . $persona4->presentarse() . "</p>";
$persona5 = new Persona("Jorge", -10, "Chef", "Buenos Aires", "Argentina");
echo "<p>" . $persona5->presentarse() . "</p>";


echo "<h2>Prueba de método masedad</h2>";
echo "<p>" . $persona5->masedad() . "</p>";
echo "<p>" . $persona4->masedad() . "</p>";
echo "<p>" . $persona3->masedad() . "</p>";
echo "<p>" . $persona2->masedad() . "</p>";
?>
