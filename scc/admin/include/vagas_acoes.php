<?php
	include ("../config.php"); 

	$codigo 	= $_POST["codigo"];
	$acao		= $_POST["acao"];
	$quote		= chr(39);	

	$titulo		= $_POST["titulo"];
	$requisitos	= str_replace(chr(13),"<br>",$_POST["requisitos"]);
	

	if($acao=="incluir")
		{
			$query = "INSERT INTO vagas ";
			$query = $query . "(titulo,formacao,experiencia,requisitos) ";
			$query = $query . "VALUES (";
			$query = $query . $quote . $titulo 		 . $quote . ", ";
			$query = $query . $quote . $_POST["formacao"] 		 . $quote . ", ";
			$query = $query . $quote . $_POST["experiencia"] 		 . $quote . ", ";
			$query = $query . $quote . $requisitos 	 . $quote . ")";
			mysql_query($query)or die("Erro: ".$query);
		}

	if($acao=="editar")
		{	
			$query = "UPDATE vagas ";
			$query = $query . "SET titulo = "	. $quote . $titulo. $quote . ", ";
			$query = $query . "formacao = "	. $quote . $_POST["formacao"]. $quote . ", ";
			$query = $query . "experiencia = "	. $quote . $_POST["experiencia"] . $quote . ", ";
			$query = $query .	"requisitos = "	. $quote . $requisitos  . $quote . " ";
			$query = $query .	"WHERE codigo = " . $codigo;
			mysql_query($query)or die("Erro: ".$query);
		}
		
	if($acao=="excluir") 
		{			
   	    	$query = "DELETE FROM vagas WHERE codigo = " . $codigo;
	    	mysql_query($query);
			
			$query = "DELETE FROM candidatura WHERE vaga = " . $codigo;
	    	mysql_query($query);			
		}
	
	header("Location: ../index.php?navega=vagas");	

?>