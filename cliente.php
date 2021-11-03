<?php

//Implementación de todos los modulos del patrón
include "receptor.php";
include "interface.php";
include "comandos.php";
include "invocador.php";

use Patron\BombillaLED;
use Patron\Aplicacion;
use Patron\On;
use Patron\Off;
use Patron\OnBlue;
use Patron\OnGreen;
use Patron\OnMedio;
use Patron\OnRed;

//El receptor

$bombillote = new BombillaLED;

//El comando

$encender = new On($bombillote);
$apagar = new Off($bombillote);
$encenderMid = new OnMedio($bombillote);
$luzverde = new OnGreen($bombillote);
$luzroja = new OnRed($bombillote);
$luzazul = new OnBlue($bombillote);

//El invocador

$aplicacion = new Aplicacion($encender, $apagar, $encenderMid, $luzroja, $luzverde, $luzazul);
?>