<?php require_once('../Connections/config.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login_digitado'])) {
  $loginUsername=$_POST['login_digitado'];
  $password=$_POST['senha_digitada'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "admin.php";
  $MM_redirectLoginFailed = "falha.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_config, $config);
  
  $LoginRS__query=sprintf("SELECT login, senha FROM `admin` WHERE login=%s AND senha=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $config) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:Pagina de login | Tecnogyn, o mundo em sua mãos!:.</title>
<link href="estilologin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="box">
<div id="topo">
<h1>Tecnogyn, o mundo em suas mãos | Pagina de login de membros</h1>
</div><!--topo-->

<div id="login">
<form name="form" ACTION="<?php echo $loginFormAction; ?>" method="POST">

<table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="50" height="32">
                <img src="imglogin/login.png" alt="Login" width="40" height="29" border="0" />
                </td>
                <td width="140">
                <input name="login_digitado" type="text" style="width:120px;" />
                </td>
                <td width="55">
                <img src="imglogin/senha.png" alt="Senha" width="47" height="29" border="0" />
                </td>
                <td width="140">
                <input name="senha_digitada" type="password" style="width:120px;" />
                </td>
                <td>
                <input type="image" name="btnEntrar" id="btnEntrar" src="imglogin/ok.png" style="border-width:0px;" />
                </td>
              </tr>

</table>

</form>
</div><!--login-->
<center>
<h2 class="estilo">	 	
Falha ao logar<BR>
Login ou Senha incorretos<BR>
</h2>

<h3 class="estilo">
<a href="../index.html">Clique aqui para voltar para o site</a><br /><br />
dica:
"Verifique se existe(m) campo(s) de preenchimento obrigatórios em branco, ou se você tem permissão para logar!"	
</h3>
</center>
<div id="divclear">
</div><!--divclear-->
<div id="footer">

<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>

          <td height="50" class="borda-rodape">&nbsp;</td>

        </tr>

        <tr>

          <td height="50" align="center" class="textorodape" id="Lb"><span id="LblAno">2010</span> &nbsp;Tecnogyn, o mundo em suas mãos ©&nbsp; 			  

&nbsp;| Todos os direitos reservados</td>

        </tr>

      </table>
</div><!--footer-->
</div><!--box-->

</body>
</html>