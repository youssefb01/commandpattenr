<?php
namespace Patron;

class On implements Comando{

    protected $bombilla;

    public function __construct(BombillaLED $bombilla){

        $this->bombilla = $bombilla;
    }
    public function ejecutar()
    {
        $this->bombilla->bombillaEncendida();
    }
}
class Off implements Comando{

    protected $bombilla;

    public function __construct(BombillaLED $bombilla){

        $this->bombilla = $bombilla;
    }
    public function ejecutar()
    {
        $this->bombilla->bombillaApagada();
    }
}
class OnMedio implements Comando{

    protected BombillaLED $bombilla;

    public function __construct(BombillaLED $bombilla){

        $this->bombilla = $bombilla;
    }
    public function ejecutar()
    {
        $this->bombilla->bombillaEncendidaMedio();
    }
}
class OnRed implements Comando{

    protected BombillaLED $bombilla;

    public function __construct(BombillaLED $bombilla){

        $this->bombilla = $bombilla;
    }
    public function ejecutar()
    {
        $this->bombilla->bombillaLuzRoja();
    }
}
class OnGreen implements Comando{

    protected BombillaLED $bombilla;

    public function __construct(BombillaLED $bombilla){

        $this->bombilla = $bombilla;
    }
    public function ejecutar()
    {
        $this->bombilla->bombillaLuzVerde();
    }
}
class OnBlue implements Comando{

    protected BombillaLED $bombilla;

    public function __construct(BombillaLED $bombilla){

        $this->bombilla = $bombilla;
    }
    public function ejecutar()
    {
        $this->bombilla->bombillaLuzAzul();
    }
}
?>