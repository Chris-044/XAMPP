<?php

class Editorial {

  private $nombre;
  private $direccion;
  private $telefono;
  private $correoElectronico;
  private $listaLibros = []; 

  public function __construct($nombre, $direccion, $telefono, $correoElectronico) {
    $this->nombre = $nombre;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
    $this->correoElectronico = $correoElectronico;
  }
}
?>
