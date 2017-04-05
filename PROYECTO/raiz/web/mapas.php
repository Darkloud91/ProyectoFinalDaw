<?php require_once('Connections/tos.php'); ?>
<?php
$name=$_GET['name'];
$order=$_GET['order'];
$type=$_GET['type'];



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

$maxRows_Mapa = 10;
$pageNum_Mapa = 0;
if (isset($_GET['pageNum_Mapa'])) {
  $pageNum_Mapa = $_GET['pageNum_Mapa'];
}
$startRow_Mapa = $pageNum_Mapa * $maxRows_Mapa;

//VACIO
if($name == null && $order == null  && $type==null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Mapa = "SELECT * FROM mapa order by nivel asc";
$query_limit_Mapa = sprintf("%s LIMIT %d, %d", $query_Mapa, $startRow_Mapa, $maxRows_Mapa);
$Mapa = mysqli_query( $tos, $query_limit_Mapa) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Mapa = mysqli_fetch_assoc($Mapa);

if (isset($_GET['totalRows_Mapa'])) {
  $totalRows_Mapa = $_GET['totalRows_Mapa'];
} else {
  $all_Mapa = mysqli_query($GLOBALS["___mysqli_ston"], $query_Mapa);
  $totalRows_Mapa = mysqli_num_rows($all_Mapa);
}

$totalPages_Mapa = ceil($totalRows_Mapa/$maxRows_Mapa)-1;
$queryString_Mapa = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Mapa") == false && 
        stristr($param, "totalRows_Mapa") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Mapa = "&" . htmlentities(implode("&", $newParams));
  }
}

$queryString_Mapa = sprintf("&totalRows_Mapa=%d%s", $totalRows_Mapa, $queryString_Mapa);
//NOMBRE
}else if($name != null && $order == null  && $type==null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Mapa = "SELECT * FROM mapa where nombre like '%$name%' order by nivel asc";
$query_limit_Mapa = sprintf("%s LIMIT %d, %d", $query_Mapa, $startRow_Mapa, $maxRows_Mapa);
$Mapa = mysqli_query( $tos, $query_limit_Mapa) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Mapa = mysqli_fetch_assoc($Mapa);

if (isset($_GET['totalRows_Mapa'])) {
  $totalRows_Mapa = $_GET['totalRows_Mapa'];
} else {
  $all_Mapa = mysqli_query($GLOBALS["___mysqli_ston"], $query_Mapa);
  $totalRows_Mapa = mysqli_num_rows($all_Mapa);
}

$totalPages_Mapa = ceil($totalRows_Mapa/$maxRows_Mapa)-1;
$queryString_Mapa = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Mapa") == false && 
        stristr($param, "totalRows_Mapa") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Mapa = "&" . htmlentities(implode("&", $newParams));
  }
}

$queryString_Mapa = sprintf("&totalRows_Mapa=%d%s", $totalRows_Mapa, $queryString_Mapa);
//ORDER
}else if($name == null && $order != null  && $type==null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Mapa = "SELECT * FROM mapa order by $order asc";
$query_limit_Mapa = sprintf("%s LIMIT %d, %d", $query_Mapa, $startRow_Mapa, $maxRows_Mapa);
$Mapa = mysqli_query( $tos, $query_limit_Mapa) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Mapa = mysqli_fetch_assoc($Mapa);

if (isset($_GET['totalRows_Mapa'])) {
  $totalRows_Mapa = $_GET['totalRows_Mapa'];
} else {
  $all_Mapa = mysqli_query($GLOBALS["___mysqli_ston"], $query_Mapa);
  $totalRows_Mapa = mysqli_num_rows($all_Mapa);
}

$totalPages_Mapa = ceil($totalRows_Mapa/$maxRows_Mapa)-1;
$queryString_Mapa = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Mapa") == false && 
        stristr($param, "totalRows_Mapa") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Mapa = "&" . htmlentities(implode("&", $newParams));
  }
}

$queryString_Mapa = sprintf("&totalRows_Mapa=%d%s", $totalRows_Mapa, $queryString_Mapa);
//TYPE
}else if($name == null && $order == null && $type!=null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Mapa = "SELECT * FROM mapa where tipo='$type' order by nivel asc";
$query_limit_Mapa = sprintf("%s LIMIT %d, %d", $query_Mapa, $startRow_Mapa, $maxRows_Mapa);
$Mapa = mysqli_query( $tos, $query_limit_Mapa) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Mapa = mysqli_fetch_assoc($Mapa);

if (isset($_GET['totalRows_Mapa'])) {
  $totalRows_Mapa = $_GET['totalRows_Mapa'];
} else {
  $all_Mapa = mysqli_query($GLOBALS["___mysqli_ston"], $query_Mapa);
  $totalRows_Mapa = mysqli_num_rows($all_Mapa);
}

$totalPages_Mapa = ceil($totalRows_Mapa/$maxRows_Mapa)-1;
$queryString_Mapa = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Mapa") == false && 
        stristr($param, "totalRows_Mapa") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Mapa = "&" . htmlentities(implode("&", $newParams));
  }
}

$queryString_Mapa = sprintf("&totalRows_Mapa=%d%s", $totalRows_Mapa, $queryString_Mapa);
//NAME Y ORDER
}else if($name != null && $order != null  && $type==null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Mapa = "SELECT * FROM mapa where nombre like '%$name%' order by $order asc";
$query_limit_Mapa = sprintf("%s LIMIT %d, %d", $query_Mapa, $startRow_Mapa, $maxRows_Mapa);
$Mapa = mysqli_query( $tos, $query_limit_Mapa) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Mapa = mysqli_fetch_assoc($Mapa);

if (isset($_GET['totalRows_Mapa'])) {
  $totalRows_Mapa = $_GET['totalRows_Mapa'];
} else {
  $all_Mapa = mysqli_query($GLOBALS["___mysqli_ston"], $query_Mapa);
  $totalRows_Mapa = mysqli_num_rows($all_Mapa);
}

$totalPages_Mapa = ceil($totalRows_Mapa/$maxRows_Mapa)-1;
$queryString_Mapa = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Mapa") == false && 
        stristr($param, "totalRows_Mapa") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Mapa = "&" . htmlentities(implode("&", $newParams));
  }
}

$queryString_Mapa = sprintf("&totalRows_Mapa=%d%s", $totalRows_Mapa, $queryString_Mapa);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Mapas - Tree of Savior Fan Base Hispana</title>
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
  	  <h1 style="margin-left:0; margin-right:0;">Base de datos de Mapas</h1>
      </div> 
      <div style="padding: 10px;">
    <form id="simple_search" action="mapas.php" method="get">
        <table>
            <tr>
                <td><b>Nombre</b></td>
                <td><b>Ordenar</b></td>
				<td><b>Tipo</b></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><input type="text" name="name" id="name" value=""/></td>
                <td>
                    <select name="order" style="width: 80px;">
                        <option>Nivel</option>
                        <option>Nombre</option>
                    </select>
                </td>
				<td>
                    <select name="type" style="width: 80px;">
                        <option>Todos</option>
                        <option>Ciudad</option>
                        <option>Mazmorra</option>
						<option>Región</option>
                    </select>
                </td>
                <td>
                    <button id="simple_search_button" type="submit" value="search">Buscar</button>
                    <a href="mapas">Limpiar</a>
                </td>
            </tr>
        </table>
        
    </form>
    <div id="resultadoBusqueda"></div>
</div>
     
       
          <div class="row">
            <div class="table table-responsive col-md-12">
              <table align="center" style="text-align:center; vertical-align:middle" class="table table-bordered" width="100%">
                <tr>
                  <td class="tituloTabla" >Nombre</td>
                  <td class="tituloTabla">Nivel</td>
                  <td class="tituloTabla">Tipo</td>
                  </tr>
				   <?php if ($totalRows_Mapa > 0) { // Show if recordset not empty ?>
				   <?php do { ?>
                <tr>
                  <td><a href="mapadetallado.php?id=<?php echo $row_Mapa['id_mapa']; ?>"><?php echo $row_Mapa['nombre']; ?> - <?php echo $row_Mapa['nombre_ingles']; ?></a></td>
                  <td><?php echo $row_Mapa['nivel']; ?></td>
				  <td><?php echo $row_Mapa['tipo']; ?></td>
				  </tr>
				   <?php } while ($row_Mapa = mysqli_fetch_assoc($Mapa)); ?>
        <?php } // Show if recordset not empty ?>
                </table>
              </div>
          </div>
         
		<div style="center"><a href="<?php printf("%s?pageNum_Mapa=%d%s", $currentPage, max(0, $pageNum_Mapa - 1), $queryString_Mapa); ?>">Anterior</a></div> <div style="center"><a href="<?php printf("%s?pageNum_Mapa=%d%s", $currentPage, min($totalPages_Mapa, $pageNum_Mapa + 1), $queryString_Mapa); ?>">Siguiente</a></div>
    <!-- InstanceEndEditable --></div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
    </div>
  <!-- end .container --></div>
</body>

<!-- InstanceEnd -->
<script type="text/javascript">
	
$("#simple_search_button").click(function(event){
    var i = 0;
    $("#simple_search input").each(function(){
        if($(this).val() !== '') {
            ++i
        }
    });
    $("#simple_search select").each(function(){
        if(($(this).attr('name') === 'order') && $(this).val() === 'Nivel') {
		//
		} else if(($(this).attr('name') === 'type') && $(this).val() === 'Todos') {
            //
        } else  {
            ++i;
        }
    });
    
    if(i === 0) {
        event.preventDefault();
        return;
    }
    
    
    $("#simple_search input").each(function(){
        if($(this).val() === '') {
            //$(this).remove();
            $(this).prop('disabled', true);
        }
    });
    $("#simple_search select").each(function(){
        if(($(this).attr('name') === 'order') && $(this).val() === 'Nivel') {
            $(this).prop('disabled', true);
		} else if(($(this).attr('name') === 'type') && $(this).val() === 'Todos') {
            $(this).prop('disabled', true);
        }
    });
    //$("#simple_search_form").submit();
});

</script> 
</html>

<?php
((mysqli_free_result($Mapa) || (is_object($Mapa) && (get_class($Mapa) == "mysqli_result"))) ? true : false);
?>
