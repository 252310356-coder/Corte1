<?php
require "estudiante.php";
// Crear el primer objeto estudiante
$estudiante1 = new Estudiante("María García", 19, "Ingeniería Informatica");
// Crear el segundo objeto estudiante
$estudiante2 = new Estudiante("Carlos López", 20, "Administración");
// Crear el tercer objeto estudiante
$estudiante3 = new Estudiante("Ana Torres", 18, "Diseño Gráfico");

// Mostrar información básica de los estudiantes
echo "<h2>Información de los Estudiantes</h2>";
echo "<p>Estudiante 1: " . $estudiante1->nombre . "</p>";
echo "<p>Estudiante 2: " . $estudiante2->nombre . "</p>";
echo "<p>Estudiante 3: " . $estudiante3->nombre . "</p>";
// Establecer promedios para cada estudiante
$estudiante1->establecerPromedio(9.2);
$estudiante2->establecerPromedio(7.8);
$estudiante3->establecerPromedio(8.7);

echo "<h2>Presentaciones de los Estudiantes</h2>";
// Hacer que cada estudiante se presente
echo "<p>" . $estudiante1->presentarse() . "</p>";
echo "<p>" . $estudiante2->presentarse() . "</p>";
echo "<p>" . $estudiante3->presentarse() . "</p>";
echo "<h2>Información Académica</h2>";
// Mostrar promedios y status de beca
echo "<p>" . $estudiante1->nombre . " - Promedio: " .
$estudiante1->obtenerPromedio() . " - Becario: " .
($estudiante1->esBecario() ? "Sí" : "No") . "</p>";

echo "<p>" . $estudiante2->nombre . " - Promedio: " .
$estudiante2->obtenerPromedio() . " - Becario: " .
($estudiante2->esBecario() ? "Sí" : "No") . "</p>";

echo "<p>" . $estudiante3->nombre . " - Promedio: " .
$estudiante3->obtenerPromedio() . " - Becario: " .
($estudiante3->esBecario() ? "Sí" : "No") . "</p>";

echo "<h2>Estudiantes nuevos</h2>";

$estudiante4 = new Estudiante("Luis Fernández", 21, "Medicina");
$estudiante5 = new Estudiante("Sofía Martínez", 22, "Arquitectura");

echo "<h1>Información de los Estudiantes Nuevos</h1>";
echo "<p>Estudiante 4: " . $estudiante4->presentarse() . "</p>";
echo "<p>Estudiante 5: " . $estudiante5->presentarse() . "</p>";

# Promedio de los estudiantes nuevos
$estudiante4->establecerPromedio(9.0);
$estudiante5->establecerPromedio(8.3);

echo "<h1>Promedios y Becas de los Estudiantes Nuevos</h1>";
echo "<p>" . $estudiante4->nombre . " - Promedio: " .
$estudiante4->obtenerPromedio() . " - Becario: " .
($estudiante4->esBecario() ? "Sí" : "No") . "</p>";

echo "<p>" . $estudiante5->nombre . " - Promedio: " .
$estudiante5->obtenerPromedio() . " - Becario: " .
($estudiante5->esBecario() ? "Sí" : "No") . "</p>";

require "producto.php";

$producto1 = new Producto("Laptop", 1500.00, "Electrónica", 10);
$producto2 = new Producto("Smartphone", 800.00, "Electrónica", 0);
$producto3 = new Producto("Camiseta", 25.00, "Ropa", 50);

echo "<h2>Información de los Productos</h2>";
echo "<p>" . $producto1->mostrarInfo() . "</p>";
echo "<p>" . $producto2->mostrarInfo() . "</p>";
echo "<p>" . $producto3->mostrarInfo() . "</p>";
echo "<h2>Disponibilidad de los Productos</h2>";
echo "<p>" . $producto1->nombre . " - Disponible: " .
($producto1->estaDisponible() ? "Sí" : "No") . "</p>";

echo "<p>" . $producto2->nombre . " - Disponible: " .
($producto2->estaDisponible() ? "Sí" : "No") . "</p>";

echo "<p>" . $producto3->nombre . " - Disponible: " .
($producto3->estaDisponible() ? "Sí" : "No") . "</p>";

echo "<h2>Aplicando Descuento</h2>";
$producto1->aplicarDescuento(10); // Aplicar 10% de descuento
echo "<p>" . $producto1->mostrarInfo() . "</p>";
$producto3->aplicarDescuento(20); // Aplicar 20% de descuento
echo "<p>" . $producto3->mostrarInfo() . "</p>";
$producto3->aplicarDescuento(5); // Aplicar 5% de descuento adicional
echo "<p>" . $producto3->mostrarInfo() . "</p>";

##SIMULACION DE COMPRA DE UN ESTUDIANTE
echo "<h2>Simulación de Compra</h2>";
echo "<p>" . $estudiante1->comprarProducto($producto1) . "</p>";
echo "<p>" . verstock($producto1) . "</p>";

echo "<p>" . $estudiante2->comprarProducto($producto2) . "</p>";
echo "<p>" . verstock($producto2) . "</p>";

echo "<p>" . $estudiante3->comprarProducto($producto3) . "</p>";
echo "<p>" . verstock($producto3) . "</p>";
?>