<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Membros</title>
<style type="text/css">
<!--
.estilo {
	color: #FFF; font-weight: bold; font:"Times New Roman", Times, serif;
}

-->
</style>
</head>
<body background="imgadmin/fundo_index.png">
<center>
<h1 class="estilo"><a href="login.php"><img src="../imgs/logotipo.png" width="390" height="210" /></a></h1>
<h1 class="estilo"> Pagina para Cadastro de Membros</h1>
<h3 class="estilo">O mundo em suas mãos</h3>
<span class="estilo"></span>


<h3 class="estilo">
<?php

//variaveis recebidas no cadastro
$login_digitado = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];

//verificar se campos estão preenchidos
if ($login_digitado == "" || $senha == "" || $nome == "" || $endereco  == "" || $complemento == "" || $telefone == "" )
	{
	echo "Existe(m) campo(s) de preenchimento obrigatórios em branco,<br>
		  infelismente terá que voltar para preenchê-lo(s).";
		 
	echo "<br> <a href=\"cadastro.php\"> Clique aqui para tentar novamente</a>";
	}

else
{	   
	   //buscar login
       while ($reg=mysql_fetch_assoc($busca))
       { 
	   		$login_db = $reg["login"];
       }
	   //verificar login disponível
	   if($login_db == $login_digitado)
	   {		
			echo "<BR>O login pretendido é \"" .$login_digitado. "\", mas, infelizmente este login já existe, por favor, tente outro.";
			echo "<BR><BR><center><a href=\"cadastro.php\">clique aqui para tentar novamente</a><BR><BR>";
			
			mysql_free_result($busca);
			$login_db="";
			mysql_close($link);
	   }
	   
	   //inserir dados
	   else
	   {
		   mysql_free_result($busca);
		   mysql_close($link);
		   
		   $res1 = mysql_connect(localhost,"root","")
		   or die ("<h2>Não foi possível conectar no servidor para a inserção</h2>".mysql_error());
				   
		   if($res1)
		   {
			   $sql = "insert into cadastros"."(login,senha,nome,email,telefone,celular,endereco,complemento)".
			   " values('$login', '$senha', '$nome', '$email', '$telefone', '$celular', '$endereco', '$complemento')";
			   $res2 = mysql_db_query("tecnogyn", $sql, $res1);
		   }
		   
		   if($res2)
		   {
              echo "<BR>";
              echo "<h2>Cadastro realizado com sucesso</h2>";
              echo "<center><a href=\"admin.html\">Clique aqui para retornar à Página Principal</a>";
              echo "<BR><BR>";
		   }
		   
		   else
           {
           
              echo "<BR>";
              echo "<h2>Erro ao cadastrar, tente novamente mais tarde</h2>";
              echo "<center><a href=\"cadastro.php\">Clique aqui para voltar à Página Principal</a>";
              echo "<BR><BR>";
		   }
	   }
}
echo "<br />";
// informações do cadastrante para confirmo
echo "Verifiqe se o seus dados e se estiver corretos, Clique em AVANÇAR, Senão clique em corrigir.<br /><br />";

				$login_digitado = $_POST['login'];
				$senha = $_POST['senha'];
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				$celular = $_POST['celular'];
				$endereco = $_POST['endereco'];
				$complemento = $_POST['complemento'];

				echo "Login Digitado: -- ".$login_digitado;
				echo "<BR><BR>Senha:--".$senha;
				echo "<BR><BR>Nome:--".$nome;
				echo "<BR><BR>E-mail:--".$email;
				echo "<BR><BR>Telefone:--".$telefone;
				echo "<BR><BR>Celular:--".$celular;
				echo "<BR><BR>Endereço:--".$endereco;
				echo "<BR><BR>Complemento:--".$complemento;


?>
</h3>

</center>
</body>
</html>