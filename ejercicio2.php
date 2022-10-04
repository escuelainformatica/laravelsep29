<?php

// java, c#,php
// Modelo.

# clase: campos + metodos = Clase de objeto de negocio.
# clase modelo: campos + opcional un constructor - no quiero metodo + eloquent
# clase de servicio: + metodos - y no quiero campos.



class ClienteModelo {
    public $rut;
    public $nombre;

    /**
     * @param $rut
     * @param $nombre
     */
    public function __construct($rut, $nombre)
    {
        $this->rut = $rut;
        $this->nombre = $nombre;
    }
}
class ClienteServicio {

    public function listarTodos() {

    }
    public function eliminar() {

    }
}

$cli1=new ClienteModelo("111111-1","John Doe");
$serv=new ClienteServicio();

$serv->listarTodos();

$serv2=new ClienteServicio();

$serv2->eliminar();
