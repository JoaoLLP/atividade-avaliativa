<?php
class Empregado{
    private $nome;
    private $sobrenome;
    private $salario;
    private $aumentoSalario;
    private $salarioTotal;
    private $salarioAnual;
    private $salarioAnualAumento;

    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function getAumentoSalario(){
        return $this->aumentoSalario;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function setAumentoSalario($aumentoSalario, $salario,$salarioTotal){
        $this->aumentoSalario= 10;
        $salarioTotal= ($salario * $aumentoSalario)/100;
    }
    public function setSalarioAnual($salarioAnual, $salario){
    $this->salarioAnual=$salarioAnual;
    $salarioAnual= $salario * 12;
    }   
    public function setSalarioAnualAumento($salarioAnualAumento, $salarioTotal){
        $this->salarioAnualAumento = $salarioAnualAumento;
        $salarioAnualAumento = $salarioTotal * 12;
    }
}


?>