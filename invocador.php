<?php
namespace Patron;

class Aplicacion{

    protected Comando $Encender;
    protected Comando $Apagar;
    protected Comando $EncenderMedio;
    protected Comando $LuzRoja;
    protected Comando $LuzVerde;
    protected Comando $LuzAzul;

    public function __construct(Comando $Encender, Comando $Apagar, Comando $EncenderMedio, Comando $LuzRoja, Comando $LuzVerde, Comando $LuzAzul){
        
        $this->Encender = $Encender;
        $this->Apagar = $Apagar;
        $this->EncenderMedio = $EncenderMedio;
        $this->LuzRoja = $LuzRoja;
        $this->LuzAzul = $LuzAzul;
        $this->LuzVerde = $LuzVerde;
    }

    public function Encender(){

        $this->Encender->ejecutar();
    }
    public function Apagar(){

        $this->Apagar->ejecutar();
    }
    public function EncenderMedio(){

        $this->EncenderMedio->ejecutar();
    }
    public function LuzRoja(){

        $this->LuzRoja->ejecutar();
    }
    public function LuzVerde(){

        $this->LuzVerde->ejecutar();
    }
    public function LuzAzul(){

        $this->LuzAzul->ejecutar();
    }
}
?>