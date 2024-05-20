<?php

class Libro {

  
  private $titulo;
  private $autor;
  private $numPaginas;
  private $genero;
  private $fechaPublicacion;

  public function __construct($titulo, $autor, $numPaginas, $genero, $fechaPublicacion) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->numPaginas = $numPaginas;
    $this->genero = $genero;
    $this->fechaPublicacion = $fechaPublicacion;
  }

}
 ?>
