<?php
require __DIR__ .'/Alunno.php';

class Classe implements JsonSerializable{ 
    protected $nome;
    protected $alunni = [];
    
    public function __construct()
    {
        //creazione array oggetti alunno
        $this->nome = "5BIA";
        $alunno1 = new Alunno("Tommaso", "Fallani", 18);
        $alunno2 = new Alunno("Isacco", "Pieri", 19);
        $alunno3 = new Alunno("Davide", "Aiazzi", 4);
        array_push($this->alunni, $alunno1);
        array_push($this->alunni, $alunno2);
        array_push($this->alunni, $alunno3);

    }

    public function getNome(){
        return $this->nome;
    }

    function getArray(){
        return $this->alunni;
    }

    public function getAlunnoByNome($nome) {
        foreach($this->alunni as $n){
            if($nome == $n-> getNome()) {
                return $n;
            }
        }
        return null;
    }

    public function jsonSerialize() {
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
            $attrs[$name]=$this->{$name};
        }
        return $attrs;
    }
}


?>