<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<link rel="stylesheet" href="scripts/css/lightbox.css" type="text/css" media="screen" />
	
	<script src="scripts/js/prototype.js" type="text/javascript"></script>
	<script src="scripts/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="scripts/js/lightbox.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
	</style>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="box">

  <div id="topo">
	 
 <?php include "menu.php" ?>

 </div><!--topo-->
<div id="content">
  <div id="conteudo">
<h1 class="texto_contato">Fale conosco!</h1>
<div class="rbcWidgetArea" style="text-align: center;"><script src="http://h1.flashvortex.com/display.php?id=3_1270229169_26151_305_0_405_39_8_43" type="text/javascript"></script>
</div>
<br />
<br />
<?php
if (isset($_POST['enviar']) && $_POST['enviar'] == 'send') {
	
//<input type="hidden" name="enviar" value="send" />

$date = date("d/m/Y h:i");

// ****** ATENÇÃO ********
// ABAIXO ESTÁ A CONFIGURAÇÃO DO SEU FORMULÁRIO.
// ****** ATENÇÃO ********

//CABEÇALHO - ONFIGURAÇÕES SOBRE SEUS DADOS E SEU WEBSITE
$nome_do_site="Tecnogyn";
$email_para_onde_vai_a_mensagem = "tecnogyn100@gmail.com";
$nome_de_quem_recebe_a_mensagem = "Tecnogyn";
$exibir_apos_enviar='';

//MAIS - CONFIGURAÇOES DA MENSAGEM ORIGINAL
$cabecalho_da_mensagem_original="From: $name <$email>\n";
$assunto_da_mensagem_original="Fale com o Tecnogyn";

// FORMA COMO RECEBERÁ O E-MAIL (FORMULÁRIO)
// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIÁVEL ABAIXO *************
$configuracao_da_mensagem_original="

ENVIADO POR:\n
Nome: $nome\n
E-mail: $email\n
Telefone: $telefone\n\n\n
Mensagem: $mensagem\n\n

ENVIADO EM: $date";

//CONFIGURAÇÕES DA MENSAGEM DE RESPOSTA
// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
// "Re: $assunto"
$assunto_da_mensagem_de_resposta = "Confirmação";
$cabecalho_da_mensagem_de_resposta = "From: $nome_do_site <$email_para_onde_vai_a_mensagem>\n";
$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_do_site\n\nEnviado em: $date";

// ****** IMPORTANTE ********
// A PARTIR DE AGORA RECOMENDA-SE QUE NÃO ALTERE O SCRIPT PARA QUE O  SISTEMA FINCIONE CORRETAMENTE
// ****** IMPORTANTE ********

//ESSA VARIAVEL DEFINE SE É O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO
//POR VOCÊ CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME
//'assunto' NO FORMULARIO DE ENVIO
$assunto_digitado_pelo_usuario="s";

//ENVIO DA MENSAGEM ORIGINAL
$headers = "$cabecalho_da_mensagem_original";
if ($assunto_digitado_pelo_usuario=="s")
{
$assunto = "$assunto_da_mensagem_original";
};
$seuemail = "$email_para_onde_vai_a_mensagem";
$mensagem = "$configuracao_da_mensagem_original";
mail($seuemail,$assunto,$mensagem,$headers);

//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
$headers = "$cabecalho_da_mensagem_de_resposta";
if ($assunto_digitado_pelo_usuario=="s")
{
$assunto = "$assunto_da_mensagem_de_resposta";
}
else
{
$assunto = "Re: $assunto";
};
$mensagem = "$configuracao_da_mensagem_de_resposta";
mail($email,$assunto,$mensagem,$headers);

/*echo "<script>window.location='$exibir_apos_enviar'</script>";*/
echo "Sua mensagem foi enviada com suscesso, Estaremos respondendo o mais breve possivel!";
}
?>


<div id="formcontato">
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">

  <fieldset>
    <legend>
      Nome:
    </legend>
    <span id="sprytextfield1">
    <input name="nome" type="text" id="nome" size="50" />
    <br />
    <span class="textfieldRequiredMsg">Informe seu nome.</span></span>
  </fieldset>
  
  <fieldset>
    <legend>
      E-mail:
    </legend>
    <span id="sprytextfield2">
    <input name="email" type="text" id="email" size="50" />
    <br />
    <span class="textfieldRequiredMsg">Informe seu e-mail.</span><span class="textfieldInvalidFormatMsg">Informe um e-mail válido.</span></span>
  </fieldset>
  
  <fieldset>
    <legend>
      Telefone:
    </legend>
    <span id="sprytextfield3">
    <input name="telefone" type="text" id="telefone" size="50" />
    <br />
    <span class="textfieldRequiredMsg">Informe seu telefone.</span><span class="textfieldInvalidFormatMsg">Número inválido. Informe com DDD</span></span>
  </fieldset>
  
  <fieldset>
    <legend>
      Assunto:
    </legend>
    <span id="sprytextfield4">
    <input name="assunto" type="text" id="assunto" size="50" />
    <br />
    <span class="textfieldRequiredMsg">Qual o assunto?</span></span>
  </fieldset>
  
  <fieldset>
    <legend>
      Mensagem
    </legend>
    <span id="sprytextarea1">
    <label>
      <textarea name="mensagem" id="mensagem" cols="55" rows="3"></textarea>
      <span id="countsprytextarea1">&nbsp;</span></label>
      <br />
    <span class="textareaRequiredMsg">Faltou a mensagem.</span><span class="textareaMaxCharsMsg">Exedeu o maximo de caracterese!</span></span>
  </fieldset>
  
  <fieldset>
    <label>
      <input type="hidden" name="enviar" value="send" />
      <input type="submit" name="send" id="send" value="Enviar" />
    </label>
  </fieldset>

</form>
</div><!--formcontato-->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "custom", {pattern:"00 0000-0000", useCharacterMasking:true});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:500, counterType:"chars_remaining", counterId:"countsprytextarea1"});
//-->
</script>

  </div><!--conteudo--> 

 <div id="sidebar">

  <h1><img src="imgs/img_noticias.png" width="210" height="28" /></h1>
 <h2>HTML 5, o que sera possivel fazer com ele</h2>
<p>Um pouco sobre a tecnologia Invariavelmente, em algum momento da vida, todo usuário se depara com o termo HTML – mesmo que não saiba o que significa. Em termos simples, o que você precisa saber é que muito daquilo existente na internet não seria possível sem o HTML. Você depende dele, mas...</p>
  
   <h2>HTML 5, o que sera possivel fazer com ele</h2>
<p>Um pouco sobre a tecnologia Invariavelmente, em algum momento da vida, todo usuário se depara com o termo HTML – mesmo que não saiba o que significa. Em termos simples, o que você precisa saber é que muito daquilo existente na internet não seria possível sem o HTML. Você depende dele, mas...</p>

 <h2>HTML 5, o que sera possivel fazer com ele</h2>
<p>Um pouco sobre a tecnologia Invariavelmente, em algum momento da vida, todo usuário se depara com o termo HTML – mesmo que não saiba o que significa. Em termos simples, o que você precisa saber é que muito daquilo existente na internet não seria possível sem o HTML. Você depende dele, mas...</p>

<h1><img src="imgs/img_wallpapers.png" width="210" height="28" /></h1>
  <ul>
  <li><a href="wallpapers/22425-146276-298.jpg" rel="lightbox[roadtrip]" ><img src="wallpapers/22425-146276-298.jpg" width="70" height="70" border="0" /></a></li>
  <li><a href="wallpapers/57520.jpg" rel="lightbox[roadtrip]"><img src="wallpapers/57520.jpg" width="70" height="70" border="0" /></a></li>
  <li><a href="wallpapers/cogumelo at&ocirc;mico(2).gif" rel="lightbox[roadtrip]"><img src="wallpapers/cogumelo at&ocirc;mico(2).gif" width="70" height="70" border="0" /></a></li>
  <li><a href="wallpapers/defaultProject.jpg" rel="lightbox[roadtrip]"><img src="wallpapers/defaultProject.jpg" width="70" height="70" border="0" /></a></li>
  <li><a href="wallpapers/logo.jpg" rel="lightbox[roadtrip]"><img src="wallpapers/logo.jpg" width="70" height="70" border="0" /></a></li>
  <li><a href="wallpapers/fique ligado.jpg" rel="lightbox[roadtrip]"><img src="wallpapers/fique ligado.jpg" width="70" height="70" border="0" /></a></li>
  <li><a href="images/image-1.jpg" rel="lightbox" ><img src="wallpapers/pc006.gif" width="70" height="70" border="0" /></a></li>
  <li><a href="wallpapers/slogan do site.jpg" rel="lightbox[roadtrip]"><img src="wallpapers/slogan do site.jpg" width="70" height="70" border="0" /></a></a></li>
  <li><a href="wallpapers/wartyfinalubuntuex6.png" rel="lightbox[roadtrip]"><img src="wallpapers/wartyfinalubuntuex6.png" width="70" height="70" border="0" /></a></li>
  </ul>  
  
 </div><!--siddebar-->
<div id="divclear">
</div>


</div><!--content-->


</div><!--box-->

<div id="footer">
   <div id="copy">
    <strong>Tecnogyn</strong> - <strong>email:</strong> tecnogyn100@gmail.com<br />
    Goiânia/GO<br />
    &copy; 2008 - <?php echo date('Y') ?> Tecnogyn - O mundo em suas mãos - Todos os direitos reservados
  
  </div><!--copy-->
</div><!--footer-->


<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {isRequired:false});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {minChars:10, maxChars:700, counterId:"countsprytextarea1", counterType:"chars_remaining"});
//-->
</script>
</body>
</html>