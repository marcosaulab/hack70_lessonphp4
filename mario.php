<?php

// Super Mario

// Ha diversi attrezzi per affrontare gli ostacoli: chiave inglese, palla di fuoco

// Ha diveri modi per muoversi: gambe, kart, nuvola


class Mario {

    public $armDx;
    public $armSx;
    public $artiInferiori;

    public function __construct(Braccio $armDx, Braccio $armSx, $artiInferiori)
    {
        $this->armDx = $armDx;
        $this->armSx = $armSx;
        $this->artiInferiori = $artiInferiori;
    }

    public function affrontaOstacoloDx() {
        $this->armDx->affrontaOstacolo();
    }

    public function affrontaOStacoloSx() {
        $this->armSx->affrontaOstacolo();
    }

    // public function marioMove() {

    // }

}

abstract class Braccio {
    abstract function affrontaOstacolo();
}

class ChiaveInglese extends Braccio {
    public function affrontaOstacolo()
    {
        echo "Svita i tubi con la chiave inglese \n";
    }
}

class SferaDiFuoco extends Braccio
{
    public function affrontaOstacolo()
    {
        echo "Incendia l'ostacolo e continua \n";
    }
}

// Sfera di fuoco velenosa

class SferaDiFuocoVelenosa extends SferaDiFuoco
{
    public $veleno; 

    public function __construct($veleno) {
        $this->veleno = $veleno;
    }

    public function affrontaOstacolo()
    {
        echo "Incendia l'ostacolo e spargi il veleno: ".$this->veleno."\n";
    }

}


$mario1 = new Mario(new ChiaveInglese(), new SferaDiFuoco(), "artiinferiori");

// $mario1->affrontaOstacoloDx();
// $mario1->affrontaOstacoloSx();


$mario2 = new Mario(new SferaDiFuocoVelenosa("arsenico"), new ChiaveInglese(), "artiinferiori");

$mario2->affrontaOstacoloDx();
$mario2->affrontaOstacoloSx();

?>


