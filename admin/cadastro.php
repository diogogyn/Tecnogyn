<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Membros</title>
<link href="estilos/estilo_cadastro.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<h1><a href="admin.php"><img src="../imgs/logotipo.png" width="390" height="210" /></a></h1>
<h1> Pagina para Cadastro de Membros</h1>
<h2>O mundo em suas mãos</h2>
<h2>Entrada de dados para efetuar o cadastro</h2>
<br />

<div id="formulario_cadastro">
<form action="cadastro2.php" method="post" name="form1" id="form1">

	<fieldset>
    	<legend>Digite apenas letras minúsculas e sem espaços em branco (preenchimento obrigatório)</legend>

        <label>
        <span>Login desejado:</span>
        <input type="text" name="login" id="login" />
        </label>
        
        <label>
        <span>Senha:</span>
        <input type="password" name="senha" id="senha" />
        </label>
        
        <label>
        <span>Nome:</span>
        <input type="text" name="nome" id="nome" />
        </label>
        
        <label>
        <span>email:</span>
        <input type="text" name="email" id="email" />
        </label>
 		<input type="submit" name="cadastrar" id="cadastrar" value="-Confirmar Cadastro-" class="btn" /><input type="reset" name="resetar" id="resetar" value="Limpar formulário" class="btn" />
          
    </fieldset>
    
</form>
</div><!--formulario de cadastro-->

</center>
</body>
</html>