<?php
class Pessoa{
    //atributo
    public $nome;
    public $sobrenome;

    //metodos GET e SET

    public function getNome()
    {
        return $this -> nome;
    }
    public function setNome($nome)
    {
       $this -> nome = $nome;
    }

    public function getSobrenome (){
        return $this -> sobrenome;
    }
    public function setSobrenome($sobrenome){
        $this -> sobrenome = $sobrenome;
    }

}
