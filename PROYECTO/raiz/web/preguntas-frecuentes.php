<?php require_once('Connections/tos.php'); ?>
<?php
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_DatosFrecuentes = 10;
$pageNum_DatosFrecuentes = 0;
if (isset($_GET['pageNum_DatosFrecuentes'])) {
  $pageNum_DatosFrecuentes = $_GET['pageNum_DatosFrecuentes'];
}
$startRow_DatosFrecuentes = $pageNum_DatosFrecuentes * $maxRows_DatosFrecuentes;

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_DatosFrecuentes = "SELECT * FROM noticias WHERE noticias.estado = 1 ORDER BY  noticias.fecha DESC";
$query_limit_DatosFrecuentes = sprintf("%s LIMIT %d, %d", $query_DatosFrecuentes, $startRow_DatosFrecuentes, $maxRows_DatosFrecuentes);
$DatosFrecuentes = mysqli_query( $tos, $query_limit_DatosFrecuentes) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_DatosFrecuentes = mysqli_fetch_assoc($DatosFrecuentes);

if (isset($_GET['totalRows_DatosFrecuentes'])) {
  $totalRows_DatosFrecuentes = $_GET['totalRows_DatosFrecuentes'];
} else {
  $all_DatosFrecuentes = mysqli_query($GLOBALS["___mysqli_ston"], $query_DatosFrecuentes);
  $totalRows_DatosFrecuentes = mysqli_num_rows($all_DatosFrecuentes);
}
$totalPages_DatosFrecuentes = ceil($totalRows_DatosFrecuentes/$maxRows_DatosFrecuentes)-1;

$queryString_DatosFrecuentes = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_DatosFrecuentes") == false && 
        stristr($param, "totalRows_DatosFrecuentes") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_DatosFrecuentes = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_DatosFrecuentes = sprintf("&totalRows_DatosFrecuentes=%d%s", $totalRows_DatosFrecuentes, $queryString_DatosFrecuentes);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/principal.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Tree of Savior Fan Base Hispana</title>
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
  <div class="row row2">
    <div class="col2 col-md-8 content"><!-- InstanceBeginEditable name="contenido" -->
    <script>
	function validateformalta()
	{
		valid=true;
		$("#aviso1").hide("slow");
		document.formfrecuente.texto.style.border="1px solid #fff";
		
		if(document.formfrecuente.texto.value==""){
			$("#aviso1").show("slow");
			document.formfrecuente.texto.style.border="1px solid red";
			valid=false;
		}
		return valid;		
	}
	</script>
  	 <h1>Preguntas frecuentes</h1>  
     <form role="form" action="" method="post" name="formfrecuente" id="formfrecuente">
     <div class="row">
           <div class="form-group col-xs-4">
             <label for="texto">Pregunta:</label>
             <input type="text" class="form-control" size="10" name="texto" id="texto" value="">
             <div class="capaerrores" id="aviso1">Debes rellenar el campo</div>
             <div class="capaexito" id="avisoexito">Tu mensaje está en la cola de moderación y será respondido en breve.</div>
           </div>
        </div>
           <div class="row">
           <div class="form-group col-xs-3"><h6></h6>
             <input name="botoninsertar" type="button" class="btn btn-default" id="botoninsertar" value="Realizar pregunta" />
           </div>
           </div>
         <input type="hidden" name="MM_insert" value="form1" />
       </form> 	
	   <?php
	   $contador=0;
	    do { ?>
       <div class="pregunta">
         <?php echo MySQLDateToDateDIA($row_DatosFrecuentes['fecha']); ?> <?php echo MySQLDateToDateHORA($row_DatosFrecuentes['fecha']); ?><br />
	     <a class="preguntas" id="lateralmyHeader<?php echo $contador; ?>" href="javascript:lateralshowonlyone('lateralnewboxes<?php echo $contador; ?>');" ><?php echo $row_DatosFrecuentes['texto']; ?><br /></a>
         <div class="lateralnewboxes" id="lateralnewboxes<?php echo $contador; ?>" style="display: none;"><?php echo $row_DatosFrecuentes['respuesta']; ?> </div></div>
        <?php
		$contador++;
		 } while ($row_DatosFrecuentes = mysqli_fetch_assoc($DatosFrecuentes)); ?>
        
	   <a href="<?php printf("%s?pageNum_DatosFrecuentes=%d%s", $currentPage, max(0, $pageNum_DatosFrecuentes - 1), $queryString_DatosFrecuentes); ?>">Anterior</a>	   <a href="<?php printf("%s?pageNum_DatosFrecuentes=%d%s", $currentPage, min($totalPages_DatosFrecuentes, $pageNum_DatosFrecuentes + 1), $queryString_DatosFrecuentes); ?>">Siguiente</a> <!-- InstanceEndEditable --></div>
    <div class="col2 col-md-4 sidebar1">
      <?php include("includes/menuDerecha.php"); ?>
    </div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
    </div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
<?php
((mysqli_free_result($DatosFrecuentes) || (is_object($DatosFrecuentes) && (get_class($DatosFrecuentes) == "mysqli_result"))) ? true : false);
?>
