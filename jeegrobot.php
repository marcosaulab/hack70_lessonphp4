<?php 

// Jeeg Robot

// è un robot che si componeva da diverse parti.

// Come è fatto Jeeg Robot
// * formato da braccio destro
// * formato da un braccio sinistro
// * Gambe per il movimento


class JeegRobot {

    public $armDx;
    public $armSx;
    public $legs;

    public function __construct(Arm $_armDx, Arm $_armSx, Gambe $_legs)
    {
        $this->armDx = $_armDx;
        $this->armSx = $_armSx;
        $this->legs = $_legs;
    }

    public function attaccoDx(){
        $this->armDx->attacca(); // utilizzo l'oggetto di tipo Arm specializzato -> ovvero (Trivella) che è quello che gli ho passato quando ho creato
                                 // JeegRobot -> Trivella (rif. $jeeg2)
    }

    public function attaccoSx() {
        $this->armSx->attacca();
    }

    public function jeegAttack($s) {
        if($s == 'd') {
            $this->attaccoDx();
        } else if ($s == 's') {
            $this->attaccoSx();
        } else {
            echo "Sono messo male...! \n";
        }
    }

    public function jeegMove() {
        $this->legs->muoviti(); // per gestire il moviementi di Jeeg uso un oggetto di classe Gambe che al suo interno ha un metodo
                                // per gestire il movimento ovvero muoviti()
    }


}


// Parte delle braccia
abstract class Arm {
    abstract public function attacca();
}

// posso attaccare con Il pugno o con la trivella

class Pugno extends Arm{
    public function attacca() {
        echo "Attacco con il Pugno!! \n";
    }
}

class Trivella extends Arm {
    public function attacca(){
        echo "Ti perforo con la Trivella!! \n";
    }
}


// Parte delle gambe

abstract class Gambe {
    abstract public function muoviti();
}

// Propulsori e con i Cingoli

class Propulsori extends Gambe {
    public function muoviti(){
        echo "Mi muovo con i propulsori \n";
    }
}

class Cingoli extends Gambe {
    public function muoviti() {
        echo "Mi muovo con i cingoli \n";
    }
}



$jeeg1 = new JeegRobot(new Pugno(), new Trivella(), new Propulsori());
$jeeg1->jeegAttack('s');
$jeeg1->jeegAttack('d');
$jeeg1->jeegAttack('s');
$jeeg1->jeegAttack('d');
$jeeg1->jeegAttack('s');
$jeeg1->jeegMove();


$jeeg2 = new JeegRobot(new Trivella(), new Pugno(), new Cingoli());
$jeeg2->jeegAttack('d');
$jeeg2->jeegAttack('s');
$jeeg2->jeegAttack('sdkjhfgsdkjfhsjkfdh');
$jeeg2->jeegMove();

?>