<?php
// Ejercicio 1: Números del 1 al 10 usando for
// Se muestra el mensaje del ejercicio
echo "<h2>Números del 1 al 10 usando for</h2>";
// Se utiliza un bucle for para imprimir los números del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    // Se muestra el número actual seguido de un salto de línea
 echo "Número: $i <br>";
}


// Ejercicio 2: Tabla de multiplicar
$numero = 5;
//Se muestra el mensaje del ejercicio
echo "<h2>Tabla de multiplicar del $numero</h2>";
// Se utiliza un bucle for para imprimir la tabla de multiplicar del número dado
for ($i = 1; $i <= 10; $i++) {
 echo "$numero x $i = " . ($numero * $i) . "<br>";
}

// Ejercicio 3: Lista de nombres usando for
// Se define un array con una lista de nombres
$nombres = array("Ana", "Carlos", "Beatriz", "Daniel", "Elena");
// Se muestra el mensaje del ejercicio
echo "<h2>Lista de nombres:</h2>";
echo "<ul>";
// Se utiliza un bucle for para recorrer el array de nombres e imprimir cada uno en una lista HTML
for ($i = 0; $i < count($nombres); $i++) {
 echo "<li>$nombres[$i]</li>";
}
echo "</ul>";


// Ejercicio 4: Números pares del 2 al 20
// Se muestra el mensaje del ejercicio
echo "<h2>Números pares del 2 al 20</h2>";
// Se utiliza un bucle for para imprimir los números pares del 2 al 20, incrementando de 2 en 2
for ($i = 2; $i <= 20; $i += 2) {
    // Se muestra el número par actual seguido de un salto de línea
 echo "$i <br>";
}

// Ejercicio 3.5: Peticion de mostrar los nombres a la inversa
// Se define un array con una lista de nombres
$nombres = array("Ana", "Carlos", "Beatriz", "Daniel", "Elena");
// Se muestra el mensaje del ejercicio
echo "<h2>Lista de nombres a la inversa:</h2>";
echo "<ul>";
// Se utiliza un bucle for para recorrer el array de nombres a la inversa
// El bucle comienza desde el último índice del array y se decrementa hasta llegar al primer índice
for ($i = count($nombres) -1; $i >= 0; $i--) {
 echo "<li>$nombres[$i]</li>";
}
echo "</ul>";
?>
