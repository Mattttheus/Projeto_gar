<?php
function cadastrar($aluno){
	try {
		$PDO = conectar();

		$sql = "INSERT INTO aluno(Email,Endereco,Endereco02,Estado,Codade) VALUES (?,?,?,?,?)";

		$stmt = $PDO->prepare($sql);
		$stmt->execute([$aluno->getEmail(),$aluno->getEndereco(),$aluno->getEstado(),$aluno->getCidade(),$aluno()]);
		if ($stmt) 
			return true;
		else
			return false;
	} catch (PDOException $e) {
		echo $e->getMessage();
		return false;	
	}
}


function verifica_acesso($email, $senha)      # Verifica login do usuário e retorna seus dados
{
  $PDO = conectar();
  if($PDO)
  {
    $sql = "select * from aluno WHERE email = '".$email."' and senha = '".$senha."'";
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll( PDO::FETCH_ASSOC );
    if(count($rows) == 1)
      return $rows[0];
    else
      return NULL;
  }
  else
  {
    print("<p>Erro ao conectar ao banco de dados!!!</p>");
    return NULL;
}
}

?>