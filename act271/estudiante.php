<?php
class Estudiante {
// Propiedades (características del estudiante)
public $nombre;
public $edad;
public $carrera;
public $promedio;
// Constructor - se ejecuta al crear un objeto
public function __construct($nombre, $edad, $carrera) {
$this->nombre = $nombre;
$this->edad = $edad;
$this->carrera = $carrera;
$this->promedio = 0.0;
}
// Métodos (comportamientos del estudiante)
public function presentarse() {
return "Hola, soy " . $this->nombre . ", tengo " . $this->edad .
" años y estudio " . $this->carrera;
}
public function establecerPromedio($promedio) {
$this->promedio = $promedio;
}
public function obtenerPromedio() {
return $this->promedio;
}
public function esBecario() {
return $this->promedio >= 8.5;
}

function comprarProducto($producto) {
    if ($producto->estaDisponible()) {
        $producto->stock--; // Reducir el stock del producto
        return $this->nombre . " ha comprado el producto: " . $producto->nombre;
        } else {
        return "Lo siento, " . $this->nombre . ", el producto " . $producto->nombre . " no está disponible.";
    }
}

}

