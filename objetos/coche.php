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
  private $encendido = false;

  private $marca;
  private $modelo;

  function coche($marcaNueva, $modeloNuevo){
    // constructor
    $this->velocidad = 0;
    $this->marca = $marcaNueva;
    $this->modelo = $modeloNuevo;
  }

    function encender(){
      $this->encendido = true;
    }
    function apagar(){
      $this->encendido = false;
    }
    function getEncendido(){
      if($this->encendido == true){
        return "Encendido";
      } else {
        return "Apagado";
      }
    }

    function getMarca(){
      return $this->marca;
    }
    function getModelo(){
      return $this->modelo;
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
      if($this->encendido == true){
      $this->velocidad++;
      // $this->velocidad += 5; //acelera de 5 en 5
      }
    }
    function frenar(){
      if($this->encendido == false){
      $this->velocidad--;
      if($this->velocidad < 0){
        $this->velocidad = 0;
      }
      //$this->velocidad -= 10; //frena de 10 en 10
      }
    }


} // final de la clase coche


//***************** pruebas
$miCoche = new coche("fiat", "multipla");
$miOtroCoche = new coche("volvo", "S40");

$miCoche->setColor("amarillo");
// $miCoche->setEncendido(true);

$miOtroCoche->setColor("rojo");
echo "Mi coche 1: ".$miCoche->getColor();
echo " Marca: ".$miCoche->getMarca();
echo " Modelo: ".$miCoche->getModelo();
echo "<br>";
echo " Mi coche 2: ".$miOtroCoche->getColor();
echo "<br>";
// $miCoche->apagar();
$miCoche->encender();
$miCoche->acelerar();
$miCoche->acelerar();
$miCoche->acelerar();
echo "Mi coche 1: " .$miCoche->getVelocidad();

 ?>
