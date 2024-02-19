<?php
require __DIR__ .'/Alunno.php';

class Classe{
    protected $alunni = [];
    //protected $nome;
    public function __construct()
    {
        //creazione array oggetti alunno
        //$this->nome = "5BIA";
        $alunno1 = new Alunno("Tommaso", "Fallani", 18);
        $alunno2 = new Alunno("Isacco", "Pieri", 19);
        $alunno3 = new Alunno("Davide", "Aiazzi", 4);
        array_push($this->alunni, $alunno1);
        array_push($this->alunni, $alunno2);
        array_push($this->alunni, $alunno3);

    }

    /*public function getNome(){
        return $this->nome;
    }*/

    function getArray(){
        return $this->alunni;
    }

    
}


?>