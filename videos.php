<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<link rel="stylesheet" href="scripts/css/lightbox.css" type="text/css" media="screen" />
	
	<script src="scripts/js/prototype.js" type="text/javascript"></script>
	<script src="scripts/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="scripts/js/lightbox.js" type="text/javascript"></script>

	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
	</style>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
</head>

<body>
<div id="box">

  <div id="topo">
	 
 <?php include "menu.php" ?>

 </div><!--topo-->
<div id="content">
 <div id="conteudo">
 
 <h1>Videos Recentes</h1>

<table>
<tr><h2>Apple 30 anos, como tudo començou</h2></tr>

<tr>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="200" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="scale" value="noscale" />
  <param name="salign" value="lt" />
  <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=movies/Apple&amp;autoPlay=false&amp;autoRewind=false" />
  <param name="swfversion" value="8,0,0,0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="400" height="200">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="scale" value="noscale" />
    <param name="salign" value="lt" />
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Corona_Skin_3&amp;streamName=movies/Apple&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0" />
    <param name="expressinstall" value="scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
</tr>
<tr>&nsub;</tr>
<tr>Historia da Apple em dois minutos:</tr>
<tr></tr>
</table>

  </div><!--conteudo-->

<?php include "lateral/side_videos.php" ?>

  <div id="divclear">
</div>

</div><!--content-->

<?php include"footer.php" ?>

<script type="text/javascript">
<!--
swfobject.registerObject("FLVPlayer");
swfobject.registerObject("FLVPlayer");
//-->
</script>
</body>
</html>