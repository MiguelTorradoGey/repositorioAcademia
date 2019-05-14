<?php
/*
 * clase de ejemplo de radio
 autor: yo mismo
 fecha: 07/05/2019 (ver 0.1)
 **** modificaciones:
 ___________________________
 */

class radio{
  private $encendida;
  private $volumen;
  private $frecuencia;

function radio(){
  // constructor
  $this->encendida = false;
  $this->volumen = 1;
  $this->frecuencia = 80;
}
//_______________________________________________ Encendido
  function encender(){
    $this->encendida = true;
  }
  function apagar(){
    $this->encendida = false;
  }
  function getEncendido(){
    if($this->encendida == true){
      return "Radio encendida";
    } else {
      return "Radio apagada";
    }
  }
//_______________________________________________**
//_______________________________________________ Volumen
  function subirVol(){
    if($this->volumen > 9 && $this->encendida == true){
      $this->volumen == 10;
    } else {
      $this->volumen ++;
    }
  }
  function bajarVol(){
    if($this->volumen < 1 && $this->encendida == true){
      $this->volumen == 0;
    } else {
      $this->volumen --;
    }
  }
  function getVolumen(){
    return $this->volumen;
  }
//_______________________________________________**
//_______________________________________________ frecuencia
  function subirFrec(){
    if($this->frecuencia > 105){
      $this->frecuencia = 80;
    } else {
      if($this->frecuencia <= 110 && $this->encendida == true){
        $this->frecuencia +=5;
      }
    }
  }
  function bajarFrec(){
    if($this->frecuencia < 85){
      $this->frecuencia = 110;
    } else {
      if($this->frecuencia >= 80 && $this->encendida == true){
        $this->frecuencia -=5;
      }
    }
  }
  function getFrecuencia(){
    return $this->frecuencia;
  }
//_______________________________________________**
//_______________________________________________ guardar frecuencia
function setFrecuencia($nuevaFrecuencia){
    if($nuevaFrecuencia <= 110 && $nuevaFrecuencia >= 80 && $this->encendida == true){
    $this->frecuencia = $nuevaFrecuencia;
    }
}
//_______________________________________________**
}// fin de la clase
//*********************************************** pruebas
$miRadio = new radio();

// $miRadio->setFrecuencia(100);
$miRadio->encender();
// $miRadio->apagar();
// $miRadio->setFrecuencia(100); // asignamos un valor de frecuencia en manual
echo "El dispositivo está: ".$miRadio->getEncendido();
echo "<br>";
  $miRadio->subirFrec();
  $miRadio->subirFrec();
  // $miRadio->subirFrec();
      // $miRadio->bajarFrec();
      // $miRadio->bajarFrec();
      // $miRadio->bajarFrec();
echo "La frecuencia está en: ".$miRadio->getFrecuencia();
echo "<br>";
   $miRadio->subirVol();
   // $miRadio->subirVol();
   // $miRadio->subirVol();
     // $miRadio->bajarVol();
     // $miRadio->bajarVol();
     // $miRadio->bajarVol();
echo "El volumen es: ".$miRadio->getVolumen();
 ?>
