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
$query_Consultaobjetodetallado = "SELECT * FROM objeto WHERE objeto.id_objeto=$id";
$Consultaobjetodetallado = mysqli_query( $tos, $query_Consultaobjetodetallado) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Consultaobjetodetallado = mysqli_fetch_assoc($Consultaobjetodetallado);
$totalRows_Consultaobjetodetallado = mysqli_num_rows($Consultaobjetodetallado);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $row_Consultaobjetodetallado['nombre']; ?> - Tree of Savior Fan Base Hispana</title>
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
    <a href="objetos"> Objetos </a> • <?php echo $row_Consultaobjetodetallado['nombre']; ?>
    </div> 
    <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;"><?php echo $row_Consultaobjetodetallado['nombre']; ?> - <?php echo $row_Consultaobjetodetallado['nombre_ingles']; ?></h1>
      </div>
      <div class="row">
            <div class="table table-responsive col-md-12">
              <table align="center" style="text-align:center; vertical-align:middle" class="table table-bordered" width="100%">
                <tr>
                  <td rowspan="4"><img width="40px" src="<?php echo $row_Consultaobjetodetallado['imagen']; ?>"/></td>
                  <td class="tituloTabla" >Nombre</td>
                  <td class="tituloTabla">Nivel</td>
                  <td class="tituloTabla">Clases</td>
                  </tr>
                <tr>
                  <td><a href="row_Consultaobjetodetallado.php?id=<?php echo $row_Objeto['id_objeto']; ?>"><?php echo $row_Consultaobjetodetallado['nombre']; ?> - <?php echo $row_Consultaobjetodetallado['nombre_ingles']; ?></a></td>
                  <td><?php echo $row_Consultaobjetodetallado['nivel']; ?></td>
				  <td><?php echo $row_Consultaobjetodetallado['clases']; ?></td>
				  </tr>
				   <tr>
                  <td colspan="1" class="tituloTabla" >Tipo de Objeto</td>
                  <td colspan="3" class="tituloTabla">Descripción</td>
                  </tr>
				   <tr>
                  <td colspan="1"><?php echo $row_Consultaobjetodetallado['tipo_danio']; ?></td>
				  <td colspan="3"><?php echo $row_Consultaobjetodetallado['descripcion']; ?></td>
				  </tr>
                </table>
              </div>
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
((mysqli_free_result($row_Consultaobjetodetallado) || (is_object($row_Consultaobjetodetallado) && (get_class($row_Consultaobjetodetallado) == "mysqli_result"))) ? true : false);
?>
