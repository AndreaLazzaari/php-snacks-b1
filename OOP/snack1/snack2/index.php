<!-- Parte 1:
Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona, 
che accetti esclusivamente un numero intero. 
Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione! -->


<?php

class Persona{
    public $age;

    public function __construct(int $_age) {
        $this->age = $_age;
    }


    function setAge(num){
        $this->_age=num;

    }


}

?>