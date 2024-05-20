<?php

class Autor {

    private $nombre;
    private $apellido;
    private $email;

    public function __construct($nombre, $apellido, $email) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
    }
}
?>