<?php require_once('Connections/tos.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Retransmisiones - Tree of Savior Fan Base Hispana</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/tosbase.css"/>
<?php include("includes/sesiones.php"); ?>
<?php include("includes/header.php"); ?>
</head>

<body>
<?php include("includes/afterBody.php"); ?>
<div class="container">
<div class="row">
  <div class="header col-md-12">
    <?php include("includes/cabecera.php"); ?>
  </div>
</div>
<div class="row">
  <div class="col-md-12 fb" align="right">
    <div style="border-bottom: 1px solid white;" class="fb-page" data-href="https://www.facebook.com/TreeofSaviorFanBaseEsp/" data-width="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"></div>
  </div>
  </div>
   <div class="contenedor">
  <div class="row">
    <div class="col2 col-md-12 content"><!-- InstanceBeginEditable name="contenido" --> 
   
    <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;">Retransmisiones</h1>
      </div> 
      
      <div class="titulo">
  	  <h4 style="margin-left:0; margin-right:0;">Retransmisiones Españolas</h4>
      </div> 
      <?php
$prueba = @file_get_contents('https://api.twitch.tv/kraken/streams?game=tree+of+savior&language=es&limit=10');
//var_dump($prueba);
$dataArray = json_decode(($prueba), true);
//var_dump($dataArray);
//echo "<pre>";
//print_r($dataArray);
//echo "</pre>";

echo "<ul id=\"streams_stream_list\">";
foreach($dataArray['streams'] as $mydata){
if($mydata['_id'] != null){
	$name 		= $mydata['channel']['display_name'];
	$viewers 	= $mydata['viewers'];
	$title 		= $mydata['channel']['status'];
	$logo 		= $mydata['channel']['logo'];
	$preview 	= $mydata['preview']['medium'];
	$url		= $mydata['channel']['url'];		

	echo "<li><a href=\"$url\"><img src=\"$preview\" class=\"stream_preview\" /></a>";
	echo "<div class=\"stream_info\">";
	echo "<div>";
	echo "<a href=\"$url\" style=\"font-weight: bold;\">". $title ."</a>";
	echo "</div>";
	echo "<div style=\"font-size: 0.9em;\">$viewers personas viendo a <a href=\"$url/profile\">" . $name . "</a>";
	echo "</div>";
	echo "<a href=\"$url/profile\"><br/><img src=\"$logo\" style=\"width: 100px; height: 100px; border: 1px solid #3f70b9; margin-top: 5px;\" /></a>";
	echo "</div>";
	echo "</li>";
}
}
echo "</ul>";
?>
 <div class="titulo">
  	  <h4 style="margin-left:0; margin-right:0;">Todas las Retransmisiones</h4>
      </div> 
  <?php
$prueba = @file_get_contents('https://api.twitch.tv/kraken/streams?game=tree+of+savior&limit=10');
//var_dump($prueba);
$dataArray = json_decode(($prueba), true);
//var_dump($dataArray);
//echo "<pre>";
//print_r($dataArray);
//echo "</pre>";

echo "<ul id=\"streams_stream_list\">";
foreach($dataArray['streams'] as $mydata){
if($mydata['_id'] != null){
	$name 		= $mydata['channel']['display_name'];
	$viewers 	= $mydata['viewers'];
	$title 		= $mydata['channel']['status'];
	$logo 		= $mydata['channel']['logo'];
	$preview 	= $mydata['preview']['medium'];
	$url		= $mydata['channel']['url'];		

	echo "<li><a href=\"$url\"><img src=\"$preview\" class=\"stream_preview\" /></a>";
	echo "<div class=\"stream_info\">";
	echo "<div>";
	echo "<a href=\"$url\" style=\"font-weight: bold;\">". $title ."</a>";
	echo "</div>";
	echo "<div style=\"font-size: 0.9em;\">$viewers personas viendo a <a href=\"$url/profile\">" . $name . "</a>";
	echo "</div>";
	echo "<a href=\"$url/profile\"><br/><img src=\"$logo\" style=\"width: 100px; height: 100px; border: 1px solid #3f70b9; margin-top: 5px;\" /></a>";
	echo "</div>";
	echo "</li>";
}
}
echo "</ul>";
?>

	  <!-- InstanceEndEditable --></div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
    </div>
  <!-- end .container --></div>
</body>

<!-- InstanceEnd --></html>