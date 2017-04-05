<?php require_once('Connections/tos.php'); ?>
<?php
$id=$_GET['id'];
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $theValue) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : "")) : ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $theValue) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));

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

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Consultaclasedetallada = "SELECT * FROM clase WHERE clase.id_clase=$id";
$Consultaclasedetallada = mysqli_query( $tos, $query_Consultaclasedetallada) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Consultaclasedetallada = mysqli_fetch_assoc($Consultaclasedetallada);
$totalRows_Consultaclasedetallada = mysqli_num_rows($Consultaclasedetallada);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $row_Consultaclasedetallada['nombre']; ?> - Tree of Savior Fan Base Hispana</title>
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
    <div>
    <a href="clases"> Clases </a> • <?php echo $row_Consultaclasedetallada['nombre']; ?>
    </div> 
    <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;"><?php echo $row_Consultaclasedetallada['nombre']; ?> - <?php echo $row_Consultaclasedetallada['nombre_ingles']; ?></h1>
      </div>
      <div class="row">
      <div class="col-xs-1">     
      <img src="<?php echo $row_Consultaclasedetallada['logo']; ?>"/>
      <div>
      <p style="text-align:center;">Rango <?php echo $row_Consultaclasedetallada['rango']; ?> </p>
      </div>
      </div>
      <div class="col-xs-7">
      <?php echo $row_Consultaclasedetallada['descripcion']; ?>
      </div>
      <div class="col-xs-4">
      <img src="<?php echo $row_Consultaclasedetallada['avatar_m']; ?>"/>
      <img src="<?php echo $row_Consultaclasedetallada['avatar_f']; ?>"/>
      </div>  
      </div> 
	   <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;">Habilidades</h1>
      </div>
      
      <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;">Atributos</h1>
      </div><!-- InstanceEndEditable --></div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
    </div>
  <!-- end .container --></div>
</body>

<!-- InstanceEnd --></html>
<?php
((mysqli_free_result($Consultaclasedetallada) || (is_object($Consultaclasedetallada) && (get_class($Consultaclasedetallada) == "mysqli_result"))) ? true : false);
?>
