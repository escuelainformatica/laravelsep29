<?php

// php, java, c#
// variable primitiva

$listado=[1,2,3,4];
// objetos
class Cliente {
    // campos
    public $rut;
    public $nombre;
}
// $cli es un objeto de la clase cliente.
// $cli es una instancia de la clase cliente.
// $cli es un puntero a un espacio de memoria.

$a=20;
$b=$a;
echo "a:$a, b:$b<br>";
$b=30;
echo "a:$a, b:$b<br>";


// new: crear un nuevo espacio de memoria.
// cli va a apuntar a ese espacio de memoria
// var cli=new Cliente(); // c#
// Cliente cli=new Cliente(); // java

$cli=new Cliente();
$cli->nombre="john";
// cli2 apunta al mismo espacio de memoria
// $cli2=clone $cli; se crea una copia de memoria independiente.
$cli2=$cli; // cli2 apunta al mismo espacio de memoria.
echo "cli:$cli->nombre , cli2: $cli2->nombre<br>";
$cli2->nombre="anna";
echo "cli:$cli->nombre , cli2: $cli2->nombre<br>";












