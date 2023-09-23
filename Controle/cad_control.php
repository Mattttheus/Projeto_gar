<?php
include "../model/aluno.php";
include "../Dao/conect.php";
include "../Dao/cad.php";

$al = new Aluno();

$al->setEmail($_POST['Email']);
$al->SetEndereco01($_POST['Enderco1']);
$al->SetEndereco02($_POST['Endereco02']);
$al->SetCidade($_POST['Cidade']);
$al->SetEstado($_POST['Estado']);


if (cadastrar($al)){


$teste= "Cadastro realizado com sicesso!";
	
  echo "<script language=javascript>window.location.replace('../Viers/matricula.php?mensagem=$teste');</script>";
  

}

    
?>