<?php

 class aluno {

    private $email;
    private $Endereco01;
    private $Endereco02;
    private $cidade;
    private $cep;
    private $estado;

        
    public function SetEstado($p){

        $this->estado=$p;
    }

    public function getEstado(){

        return $this->estado;
    }


    public function SetCep($p){

        $this->cep=$p;
    }

    public function getCep(){

        return $this->cep;
    }



    
      
    public function SetCidade($p){

        $this->cidade=$p;
    }

    public function getCidade(){

        return $this->cidade;
    }
    



    
    public function SetEndereco02($p){

        $this->Endereco02=$p;
    }

    public function getEndereco02(){

        return $this->Endereco02;
    }





    
    
    public function SetEndereco01($p){

        $this->Endereco01=$p;
    }

    public function getEndereco01(){

        return $this->Endereco01;
    }




    

 public function setEmail($p){
    
    $this ->email=$p;
}
    
    public  function getEmail(){

        return$this -> email;
    }




    
}





 
 $aluno = new aluno ();
$aluno->setEmail("email");


 
 echo $aluno->getEmail("");

 $aluno->SetEndereco01("endercco1");

 echo $aluno->getEndereco01("");
 
 $aluno->SetEndereco02("endereco02");

 echo $aluno->getEndereco02("");
 
 $aluno->setCidade("cidade");

 echo $aluno->getCidade("");
 
 $aluno->SetEstado("estado");

 echo $aluno->getEstado("");
 
 $aluno->SetCep("cep");

 echo $aluno->getCep("");
?>