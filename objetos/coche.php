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
  private $encendido;
  private $marca;
  private $modelo;
  public $puertas;

  function coche($marcaNueva, $modeloNuevo){
    // constructor
    $this->velocidad = 0;
    $this->marca = $marcaNueva;
    $this->modelo = $modeloNuevo;
    $this->encendido = false;
  }
  // _____________________________________________________ encendido y marcha
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
      function acelerar(){
        if($this->encendido == true){
        $this->velocidad++;
        // $this->velocidad += 5; //acelera de 5 en 5
        }
      }
      function frenar(){
        if($this->encendido == false){
        $this->velocidad--;
        }
        if($this->velocidad < 0){
          $this->velocidad = 0;
          // $this->velocidad -= 10; //frena de 10 en 10
        }
      }
// _____________________________________________________ **
// _____________________________________________________ velocidad
    function getVelocidad(){
      return "La velocidad es ".$this->velocidad;
    }
// _____________________________________________________ **
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
      return "EL color es ".$this->color;
    }
    // _____________________________________________________ puertas
    function setPuertas($numPuertas){
      $this->puertas = $numPuertas;
    }
    function getPuertas(){
      return "puertas ".$this->puertas;
    }
    // _____________________________________________________ **


function toString(){
$resultado = "El coche es marca ".$this->marca;
$resultado .=" y modelo ".$this->modelo;
$resultado .=", está ".$this->getEncendido();
$resultado .=", es de color ".$this->color;
$resultado .=" y su velocidad es ".$this->velocidad;
return $resultado;
}
} // final de la clase coche
//***************** pruebas
$miCoche = new coche("fiat", "multipla");
$miOtroCoche = new coche("volvo", "S40"); //********
$miCoche->setColor("amarillo");
$miCoche->setPuertas(3);
// $miCoche->setEncendido(true);
$miOtroCoche->setColor("rojo"); //********
echo "Mi coche 1: ".$miCoche->getColor();
echo "<br>";
echo " Marca: ".$miCoche->getMarca();
echo "<br>";
echo " Modelo: ".$miCoche->getModelo();
echo "<br>";
echo " Número ".$miCoche->getPuertas();
echo "<br>";
// $miCoche->apagar();
$miCoche->encender();
$miCoche->acelerar();
$miCoche->acelerar();
$miCoche->acelerar();
$miCoche->acelerar();
echo "Mi coche: ".$miCoche->getVelocidad();
echo "<br>";
echo "<br>";
echo " Mi otro coche: ".$miOtroCoche->getColor(); //********
echo "<br>";
echo "<br>";
echo $miCoche->toString();
 ?>
