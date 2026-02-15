<?php
//Conociendo php
    //Comentarios de linea
    /*comentarios
    Multilinea
    */

    /**
     * Ayuda para hacer docstring y comentar 
     */

    //Variable entera
    $edad= 18;

    //Variable flotante
    $costo = 15.25;
    
    //Variables String
    $nombre = "Otoniel";
    $apellido= "Rodriguez Moreno";
    $ubicacion= "Gomez Palacio";
    //Variable booleana
    $estado= False;

    //Constante
    Const EMPRESA = "Tech Solution S.A.";

    //Mostrar en pantalla
    echo "Este es para mostrar en pantalla con echo";
    echo "<br>";
    echo "<p> Nombre y apellido del usuario <strong> $nombre $apellido </strong></p>";
    echo "<p> Edad: <strong> $edad </strong></p>";
    echo "<p> Ubicacion: <strong> $ubicacion </strong> </p>";
    echo "<p> Precio del producto: <strong> $costo </strong> </p>";
    echo "<p> Empresa: <strong>" . EMPRESA . "</strong></p>";

    //Operaciones matematicas
    $Precio_descuento= $costo * 0.9;
    echo "<p> Precio con descuento: <strong> $Precio_descuento </strong> </p> ";
    //Concatenar texto

    $mensaje= "Hola " . $nombre . " Bienvenido a " . EMPRESA;
    echo $mensaje;
    echo "<br>";
    echo "<b>Hola</b> $apellido <i>que tal estas?</i>";
    echo "<br>";
    echo 'Hola $nombre esta es otra prueba';

      //Desafio adicional
    Const IVA = 0.16;
    $Precio_final = $Precio_descuento + ($Precio_descuento * IVA);
    echo "<p> Precio final con IVA (Constante): <strong> $Precio_final </strong> </p>";
    