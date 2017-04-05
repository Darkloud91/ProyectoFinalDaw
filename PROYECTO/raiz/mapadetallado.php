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
$query_Consultamapadetallado = "SELECT * FROM mapa WHERE mapa.id_mapa=$id";
$Consultamapadetallado = mysqli_query( $tos, $query_Consultamapadetallado) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Consultamapadetallado = mysqli_fetch_assoc($Consultamapadetallado);
$totalRows_Consultamapadetallado = mysqli_num_rows($Consultamapadetallado);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $row_Consultamapadetallado['nombre']; ?> - Tree of Savior Fan Base Hispana</title>
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
  	  <h1 style="margin-left:0; margin-right:0;"><?php echo $row_Consultamapadetallado['nombre']; ?> - <?php echo $row_Consultamapadetallado['nombre_ingles']; ?></h1>
      </div>
	  <div style="padding-left: 15px; margin-bottom: 10px;">
		  <a href="mapas"> Mapas </a> • <?php echo $row_Consultamapadetallado['nombre']; ?></div>
		  <div style="overflow: hidden; margin-bottom: 20px;">
			  <div style="width: 25%; float: left;"><div class="titulo"><h3>Info del mapa</h3></div>
			  <div style="margin-left: 15px; margin-right: 15px;"><b>Area: </b><?php echo $row_Consultamapadetallado['area']; ?><br/>
			  <b>Tipo: </b> <?php echo $row_Consultamapadetallado['tipo']; ?><br/>
			  <b>Nivel: </b> <?php echo $row_Consultamapadetallado['nivel']; ?><br/>
			  <b>Se puede usar Orbe del revivir: </b> <?php if($row_Consultamapadetallado['orbe_revivir']==1){echo "Si";}else{echo "No";} ?><br/>
				  </div>
				  </div>
				  <div style="width: 50%; float: left;margin-left: 100px;"><div class="titulo"><h3>Mapas Conectados</h3></div><div style="margin-left: 15px; margin-right: 15px;">Ninguno</div>
					  </div>
					  </div>
					  <br/>
					  <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;">Mapa</h1>
      </div>
	  <div>
	  <a href="#" class="pop">
	  <img  width="300px"src="<?php echo $row_Consultamapadetallado['avatar']; ?>" />
	  </a>
	  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>
	  </div>
		  <!-- InstanceEndEditable --></div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
    </div>
  <!-- end .container --></div>
</body>

<!-- InstanceEnd -->
<script>
$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});
</script>
</html>
<?php
((mysqli_free_result($row_Consultamapadetallado) || (is_object($row_Consultamapadetallado) && (get_class($row_Consultamapadetallado) == "mysqli_result"))) ? true : false);
?>
