<?php

use danieldolz\SayHello;
//  --> Opció per assignar el namespace de la classe
//  --> L'altra es fer servir use as: use HelloWorld\SayHello as SayHello2();

require "vendor/autoload.php";

require "src/SayHello.php";

// $sayhello = new \HelloWorld\SayHello();
//
// echo $sayhello->world();

echo \HelloWorld\SayHello::world();

echo SayHello::world();


// == Namespace ==