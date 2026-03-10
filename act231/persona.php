<?php
class Persona {
 public $nombre;
 private $edad;
 public $ocupacion;
 public $ciudad;
 public $nacionalidad;
 // Constructor para inicializar atributos
 public function __construct($nombre, $edad, $ocupacion,$ciudad, $nacionalidad) {
 $this->nombre = $nombre;
 $this->edad = $edad;
 $this->ocupacion = $ocupacion;
 $this->ciudad = $ciudad;
 $this->nacionalidad = $nacionalidad;
 }

 function edad() {
    if ($this->edad < 0) {
        return "Edad no válida";
    } else {
        return $this->edad;
    }
    }
 // Método que usa $this-> para acceder a los atributos

 function masedad() {
    if ($this->edad < 0) {
        return "Edad no válida, no se puede calcular la edad futura.";
    } else {
    return "Si tuviera 5 años mas de los que tengo, entonces tendria " . ($this->edad() + 5) . " años.";
    }
    }

 public function presentarse() {
 return "Hola, mi nombre es, ". $this->nombre ." tengo ". $this->edad() ." años y soy
$this->ocupacion. Vivo en $this->ciudad, y mi nacionalidad es $this->nacionalidad.";
 }
 // Método que usa $this-> para modificar un atributo
 public function cambiarOcupacion($nuevaOcupacion) {
 $this->ocupacion = $nuevaOcupacion;
 return "Ahora mi ocupación es: $this->ocupacion";
 }
}
?>