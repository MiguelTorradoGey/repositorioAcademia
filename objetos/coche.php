<?php
/*
 * clase de ejemplo de cohes
 autor: yo mismo
 fecha: 06/05/2019 (ver 0.1)
 **** modificaciones:
 ___________________________
 */
class coche
{
  private $color;
  private $velocidad;

  private $marca;
  private $modelo;

  function coche($marcaNueva, $modeloNuevo){
    // constructor
    $this->velocidad = 0;
    $this->marca = $marcaNueva;
    $this->modelo = $modeloNuevo;
  }

    function setColor($nuevoColor){
      $this->color = $nuevoColor;
    }
    function getColor(){
      return "EL color es".$this->color;
    }

    function getVelocidad(){
      return "La velocidad es ".$this->velocidad;
    }
    function acelerar(){
      $this->velocidad++;
      //$this->velocidad += 5; //acelera de 5 en 5
    }
    function frenar(){
      $this->velocidad--;
      //$this->velocidad -= 10; //frena de 10 en 10
    }

} // final de la clase coche


//***************** pruebas
$miCoche = new coche("fiat", "multipla");
$miOtroCoche = new coche("volvo", "S40");
    // $miCoche = new coche();
    // $miOtroCoche = new coche();
$miCoche->setColor("amarillo");
$miOtroCoche->setColor("rojo");
echo "Mi coche 1: " .$miCoche->getColor();
echo "<br>"
echo " Mi coche 2: " .$miOtroCoche->getColor();
echo "<br>";
$miCoche->acelerar();
$miCoche->acelerar();
$miCoche->acelerar();
echo "Mi coche 1: " .$miCoche->getVelocidad();

 ?>
