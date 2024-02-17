<?php
require("Alunno.php");
class Classe{
    protected $arrayy = [];
    public function __construct(){
        $a1 = new Alunno("Gianlu", "Gianne", 18);
        $a2 = new Alunno("Gabri", "Lolla", 16);
        $a3 = new Alunno("Ebebu", "aaab", 15);
        $a4 = new Alunno("Costa", "Dangelo", 19);
        array_push($this->arrayy, $a1);
        array_push($this->arrayy, $a2);
        array_push($this->arrayy, $a3);
        array_push($this->arrayy, $a4);
    }
   public function getArray(){
    return $this->arrayy;
   }
}
?>