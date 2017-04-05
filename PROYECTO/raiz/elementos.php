<?php require_once('Connections/tos.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Elementos - Tree of Savior Fan Base Hispana</title>
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
  	  <h1 style="margin-left:0; margin-right:0;">Elementos</h1>
      </div>
      <div class="row">
        <div class="col-md-10">
      El daño infligido a un enemigo está influenciado por los elementos del atacante y del defensor.<br/>
   	Esos elementos son
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/fire.png" alt="Fire Element" /> <span style="color: #f54d33;">Fuego</span>,
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/ice.png" alt="Ice Element" /> <span style="color: #2fb3ff;">Hielo</span>,
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/lightning.png" alt="Lightning Element" /> <span style="color: #ecb612;">Rayo</span>,
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/poison.png" alt="Poison Element" /> <span style="color: #46bd46;">Veneno</span>,
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/earth.png" alt="Earth Element" /> <span style="color: #786231;">Tierra</span>,
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/holy.png" alt="Holy Element" /> <span style="color: darkgray;">Bendito</span> y
    <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/dark.png" alt="Dark Element" /> <span style="color: #1c2232;">Oscuridad</span>.<br/>
    Los ataques no elementales, no estan influenciados.

      </div>
      </div> 
	   <div class="titulo">
  	  <h2 style="margin-left:0; margin-right:0;">Tabla de Elementos</h2>
      </div>
      <div style="overflow: hidden;">

       <div style="float: left; width: 340px; padding: 10px;">
        Esta tabla muestra los modificadores de daño para todas las posibles combinaciones de elementos.<br/>
        La columna de la izquierda representa el elemento ofensivo y la fila superior el elemento defensivo.<br/><br/>
        <b>Por ejemplo:</b><br/>
        
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/ice.png" alt="Ice Element" /> <span style="color: #2fb3ff;">Hielo</span>
        hace <span style="color: green;">150%</span> de daño contra
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/fire.png" alt="Fire Element" /> <span style="color: #f54d33;">Fuego</span>.<br/>
        
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/lightning.png" alt="Lightning Element" /> <span style="color: #ecb612;">Rayo</span>
        hace <span style="color: red;">50%</span> de daño contra
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/earth.png" alt="Earth Element" /> <span style="color: #786231;">Tierra</span>.<br/>
        
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/holy.png" alt="Holy Element" /> <span style="color: darkgray;">Bendito</span>
        hace <span style="color: green;">200%</span> de daño contra
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/dark.png" alt="Dark Element" /> <span style="color: #1c2232;">Oscuridad</span>.<br/>
        
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/dark.png" alt="Dark Element" /> <span style="color: #1c2232;">Oscuridad</span>
        hace <span style="color: green;">200%</span> de daño contra
        <img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/holy.png" alt="Holy Element" /> <span style="color: darkgray;">Bendito</span>.
    </div>
 <div style="float: right; text-align: center; width: 380px; margin-right: 10px;"><img src="images/mecanicas/elemental_chart_en.png" alt="Element Table" /></div>
 </div>

      <div class="titulo">
  	  <h2 style="margin-left:0; margin-right:0;">Habilidades Elementales</h2>
      </div>
      <div style="padding: 10px; padding-top: 5px;">
    Habilidades que hacen daño elemental:<br/>
    <a href="database/skills/?name=&class=All&type=All&element=Fire&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/fire.png" alt="Fire Element" /><span style="color: #f54d33;">Habilidades de Fuego</span></a>,
    <a href="database/skills/?name=&class=All&type=All&element=Ice&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/ice.png" alt="Ice Element" /><span style="color: #2fb3ff;">Habilidades de Hielo</span></a>,
    <a href="database/skills/?name=&class=All&type=All&element=Lightning&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/lightning.png" alt="Lightning Element" /><span style="color: #ecb612;">Habilidades de Rayo</span></a>,
    <a href="database/skills/?name=&class=All&type=All&element=Poison&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/poison.png" alt="Poison Element" /><span style="color: #46bd46;">Habilidades de Veneno</span></a>,
    <a href="database/skills/?name=&class=All&type=All&element=Earth&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/earth.png" alt="Earth Element" /><span style="color: #786231;">Habilidades de Tierra</span></a>,
    <a href="database/skills/?name=&class=All&type=All&element=Holy&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/holy.png" alt="Holy Element" /><span style="color: darkgray;">Habilidades de Bendito</span></a>,<br/>
    <a href="database/skills/?name=&class=All&type=All&element=Dark&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/dark.png" alt="Dark Element" /><span style="color: #1c2232;">Habilidades de Oscuridad</span></a>
</div>

      
      <div class="titulo">
  	  <h2 style="margin-left:0; margin-right:0;">Monstruos Elementales</h2>
      </div>
      <div style="padding: 10px; padding-top: 5px; padding-bottom: 0px;">
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Fire&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/fire.png" alt="Fire Element" /> <span style="color: #f54d33;">Monstruos de Fuego</span></a>,
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Ice&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/ice.png" alt="Ice Element" /> <span style="color: #2fb3ff;">Monstruos de Hielo</span></a>,
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Lightning&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/lightning.png" alt="Lightning Element" /> <span style="color: #ecb612;">Monstruos de Rayo</span></a>,
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Poison&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/poison.png" alt="Poison Element" /> <span style="color: #46bd46;">Monstruos de Veneno</span></a>,
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Earth&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/earth.png" alt="Earth Element" /> <span style="color: #786231;">Monstruos de Tierra</span></a>,<br/>
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Holy&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/holy.png" alt="Holy Element" /> <span style="color: darkgray;">Monstruos de Bendito</span></a>,
    <a href="database/monsters/?name=&order=Level&type=All&race=All&element=Dark&armor=All&search=search" target="_blank"><img style="vertical-align: middle; height: 1em;" src="images/iconos/elementos/dark.png" alt="Dark Element" /> <span style="color: #1c2232;">Monstruos de Oscuridad</span></a>
</div>        
	  <!-- InstanceEndEditable --></div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
    </div>
  <!-- end .container --></div>
</body>

<!-- InstanceEnd --></html>