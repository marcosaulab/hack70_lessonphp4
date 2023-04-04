<?php 

// La macchina di Batman è formata da (Ha - un)
    // ? una parte anteriore per gestire l'attacco
    // ? una parte posteriore per gestire il movimento


class Batmobile {

    public $parteAnteriore;
    public $partePosteriore;

    public function __construct(ParteAnteriore $_parteAnteriore, PartePosteriore $_partePosteriore)
    {
        $this->parteAnteriore = $_parteAnteriore;
        $this->partePosteriore = $_partePosteriore;
    }

    public function batAttack() {
        $this->parteAnteriore->attacca();
    }

    public function batMove(){
        $this->partePosteriore->muoviti();
    }

}   

abstract class ParteAnteriore {
    abstract public function attacca();
}

// $parteAnteriore = new ParteAnteriore();

// $batmobile1 = new Batmobile(new ParteAnteriore(), "partePosteriore");


// $batmobile1->batAttack();



// Come attacca la batmobile? attacca con Lanciarazzi e Lanciafiamme

class Lanciarazzi extends ParteAnteriore {
    public function attacca() {
        echo "Ti Attacco con i razzi \n";
    }
}

class Lanciafiamme extends ParteAnteriore {
    public function attacca() {
        echo "Ti Attacco con le Fiamme \n";
    }
}


// $batmobile2 = new Batmobile(new Lanciarazzi(), "partePosteriore");
// $batmobile2->batAttack();

// $batmobile3 = new Batmobile(new Lanciafiamme(), "partePosteriore");
// $batmobile3->batAttack();





// Batmobile DEVE avere un una parte anteriore -> mettendo nel costruttore un oggetto di tipo ParteAnteriore


// ParteAnteriore è una classe -> l'ogetto di questa classe io lo passo a Batmobile quando creo la Batmobile


// $batMobileEsempio = new Batmobile(new ParteAnteriore(), "partePosteriore");

// ParteAnteriore ha un metodo che attacca()

// la batMobile per attaccare si deve servire della sua ParteAnteriore -> cioè deve usare l'oggetto di tipo ParteAnteriore che 
// abbiamo passato nel costruttore di Batmobile

// Come fa batmobile a servisi del metodo attacca() che sta dentro la classe ParteAnteriore?

// Si fa un metodo all'interno della classe Batmobile che si chiama batAttack()
/*
?    public function batAttack() {
?        $this->parteAnteriore->attacca();
?    }
*/

// La batmobile a questo punto può attaccare cioè può usare il suo metodo batAttack()
//  Il metodo batAttack() cosa fa? -> usa l'oggetto parteAnteriore per richiamare il metodo attacca() (che sta dentro la classe PartAnteriore)


// ora vediamo la parte posteriore

abstract class PartePosteriore {
    abstract public function muoviti();
}

// Ora voglio specializzare il movimento

class Gomme extends PartePosteriore {
    public function muoviti(){
        echo "Mi muovo con le gomme \n";
    }
}

class Batwing extends PartePosteriore {
    public function muoviti() {
        echo "Volo col Batwing \n";
    }
}

// $batmobile5 = new Batmobile(new Lanciarazzi(), new PartePosteriore());
// $batmobile5->batAttack();
// $batmobile5->batMove();

// $batmobile6 = new Batmobile(new Lanciafiamme(), new PartePosteriore());
// $batmobile6->batAttack();
// $batmobile6->batMove();

$batmobile7 = new Batmobile(new Lanciafiamme(), new Gomme());
$batmobile7->batAttack();
$batmobile7->batMove();


$batmobile8 = new Batmobile(new Lanciarazzi(), new Batwing());
$batmobile8->batAttack();
$batmobile8->batMove();


// ! Abbiamo fatto object composition perché abbiamo passato a Batmobile degli OGGETTI COME ATTRIBUTI
// ! Abbiamo fatto Dependency Injection perché abbiamo iniettato quei tipi costringendo il programmatore
// ! a RSPETTARE quei valori

?>