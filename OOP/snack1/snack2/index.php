<!-- Parte 1:
Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona, 
che accetti esclusivamente un numero intero. 
Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione! -->



<!-- Parte 2:
Includendo con try e catch una chiamata a setAge con una stringa come argomento,
catturare l'eccezione e invece di emettere un errore bloccante, scrivere in pagina il messaggio di errore. -->


<?php

class Persona{
    public $age;

    public function __construct(int $_age) {
        $this->age = $_age;
    }


    public function setAge($age){
       if ( !is_int($age) ){
        throw new Exception('il numero inserito non è un numero intero');
    } else {
        $this->age = $age;
    }
}


$persona = new Persona();

try {
    $persona->setAge('ciao');
} catch (Throwable $e){
    echo 'Errore nella mia età' . $e->getMessage();
}

}



