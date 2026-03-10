<?php

class Producto {
public $nombre;
public $precio;
public $categoria;
public $stock;
public function __construct($nombre, $precio, $categoria, $stock) {
// Completa el constructor
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->categoria = $categoria;
    $this->stock = $stock;
}
public function aplicarDescuento($porcentaje) {
// Método que reduce el precio según el porcentaje dado
    $descuento = $this->precio * ($porcentaje / 100);
    $this->precio -= $descuento;
}
public function estaDisponible() {
// Retorna true si hay stock, false si no
    return $this->stock > 0;
}
public function mostrarInfo() {
// Retorna información completa del producto
    return "Producto: " . $this->nombre . "<br>" .
           "Precio: $" . number_format($this->precio, 2) . "<br>" .
           "Categoría: " . $this->categoria . "<br>" .
           "Stock: " . $this->stock;
}
}

function verstock($producto) {
    echo "El producto " . $producto->nombre . " tiene un stock de: " . $producto->stock;
}
?>