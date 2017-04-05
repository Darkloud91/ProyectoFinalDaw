<?php require_once('Connections/tos.php'); ?>
<?php
$name=$_GET['name'];
$order=$_GET['order'];
if($_GET['type']=="Jefe"){
$type=2;
}else if($_GET['type']=="Normal"){
$type=1;
}             
 if($_GET['race']=="Planta"){                
$race=1;
}else if($_GET['race']=="Demonio"){
$race=2;
}else if($_GET['race']=="Mutante"){
$race=3;
}else if($_GET['race']=="Bestia"){
$race=4;
}else if($_GET['race']=="Insecto"){
$race=5;
}
if($_GET['element']=="Veneno"){                
$element=1;
}else if($_GET['element']=="Oscuridad"){
$element=2;
}else if($_GET['element']=="Tierra"){
$element=3;
}else if($_GET['element']=="Fuego"){
$element=4;
}else if($_GET['element']=="Hielo"){
$element=5;
}else if($_GET['element']=="Rayo"){
$element=6;
}else if($_GET['element']=="Bendito"){
$element=7;
}else if($_GET['element']=="Físico"){
$element=8;
}
if($_GET['armor']=="Tela"){                
$armor=1;
}else if($_GET['armor']=="Cuero"){
$armor=2;
}else if($_GET['armor']=="Placas"){
$armor=3;
}else if($_GET['armor']=="Espectral"){
$armor=4;
}
$size=$_GET['size'];

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

$maxRows_Monstruo = 10;
$pageNum_Monstruo = 0;
if (isset($_GET['pageNum_Monstruo'])) {
  $pageNum_Monstruo = $_GET['pageNum_Monstruo'];
}
$startRow_Monstruo = $pageNum_Monstruo * $maxRows_Monstruo;

//VACIO
if($name == null && $order == null && $type== null && $race== null && $element== null && $armor== null && $size== null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}

$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;
$queryString_Monstruo = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Monstruo") == false && 
        stristr($param, "totalRows_Monstruo") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Monstruo = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Monstruo = sprintf("&totalRows_Monstruo=%d%s", $totalRows_Monstruo, $queryString_Monstruo);
//NOMBRE
}else if($name != null && $order == null && $type== null && $race== null && $element== null && $armor== null && $size== null){
((bool)mysqli_query( $tos, "USE " . $database_tos));

$query_Monstruo = "SELECT * FROM monstruo where nombre like '%$name%' order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//ORDEN
}else if($name == null && $order != null && $type== null && $race== null && $element== null && $armor== null && $size== null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo order by $order asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;
//TIPO
}else if($name == null && $order == null && $type != null && $race == null && $element == null && $armor == null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where tipo=$type order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//RAZA
}else if($name == null && $order == null && $type == null && $race != null && $element == null && $armor == null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where raza=$race order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//ELEMENT
}else if($name == null && $order == null && $type == null && $race == null && $element != null && $armor == null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where elemento=$element order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//ARMOR
}else if($name == null && $order == null && $type == null && $race == null && $element == null && $armor != null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where armadura=$armor order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//SIZE
}else if($name == null && $order == null && $type == null && $race == null && $element == null && $armor == null && $size != null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where tamanio='$size' order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;
//CONSULTAS CON NOMBRE
//NAME & ORDER
}else if($name != null && $order != null && $type == null && $race == null && $element == null && $armor == null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where nombre like '%$name%' order by $order asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//NAME & TYPE
}else if($name != null && $order == null && $type != null && $race == null && $element == null && $armor == null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where nombre like '%$name%' and tipo=$type order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;

//NAME & RACE
}else if($name != null && $order == null && $type == null && $race != null && $element == null && $armor == null && $size == null){
((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Monstruo = "SELECT * FROM monstruo where nombre like '%$name%' and raza=$race order by nivel asc";
$query_limit_Monstruo = sprintf("%s LIMIT %d, %d", $query_Monstruo, $startRow_Monstruo, $maxRows_Monstruo);
$Monstruo = mysqli_query( $tos, $query_limit_Monstruo) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Monstruo = mysqli_fetch_assoc($Monstruo);

if (isset($_GET['totalRows_Monstruo'])) {
  $totalRows_Monstruo = $_GET['totalRows_Monstruo'];
} else {
  $all_Monstruo = mysqli_query($GLOBALS["___mysqli_ston"], $query_Monstruo);
  $totalRows_Monstruo = mysqli_num_rows($all_Monstruo);
}
$totalPages_Monstruo = ceil($totalRows_Monstruo/$maxRows_Monstruo)-1;
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
<title>Monstruos - Tree of Savior Fan Base Hispana</title>
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
  	  <h1 style="margin-left:0; margin-right:0;">Base de datos de Monstruos</h1>
      </div> 
      <div style="padding: 10px;">
    <form id="simple_search" action="monstruos.php" method="get">
        <table>
            <tr>
                <td><b>Nombre</b></td>
                <td><b>Ordenar</b></td>
                <td><b>Tipo</b></td>
                <td><b>Raza</b></td>
                <td><b>Elemento</b></td>
                <td><b>Armadura</b></td>
                <td><b>Tamaño</b></td>
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
                        <option>Jefe</option>
                        <option>Normal</option>
                    </select>
                </td>
                <td>
                    <select name="race" style="width: 80px;">
                        <option>Todos</option>
                        <option>Bestia</option>
                        <option>Demonio</option>
                        <option>Insecto</option>
                        <option>Mutante</option>
                        <option>Planta</option>
                    </select>
                </td>
                <td>
                    <select name="element" style="width: 80px;">
                        <option>Todos</option>
                        <option>Oscuridad</option>
                        <option>Tierra</option>
                        <option>Fuego</option>
                        <option>Bendito</option>
                        <option>Hielo</option>
                        <option>Rayo</option>
                        <option>Físico</option>
                        <option>Veneno</option>
                    </select>
                </td>
                <td>
                    <select name="armor" style="width: 80px;">
                        <option>Todos</option>
                        <option>Tela</option>
                        <option>Espectral</option>
                        <option>Cuero</option>
                        <option>Placas</option>
                    </select>
                </td>
                <td>
                    <select name="size" style="width: 80px;">
                        <option>Todos</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </td>
                <td>
                    <button id="simple_search_button" type="submit" value="search">Buscar</button>
                    <a href="monstruos">Limpiar</a>
                </td>
            </tr>
        </table>
        
    </form>
    <div id="resultadoBusqueda"></div>
</div>
      <?php if ($totalRows_Monstruo > 0) { // Show if recordset not empty ?>
        <?php do { ?>
          <div class="row">
            <div class="table table-responsive col-md-12">
              <table align="center" style="text-align:center; vertical-align:middle" class="table table-bordered" width="100%">
                <tr>
                  <td rowspan="4"><img width="80px" src="<?php echo $row_Monstruo['imagen']; ?>"/></td>
                  <td class="tituloTabla" colspan="3">Nombre</td>
                  <td class="tituloTabla">Nivel</td>
                  <td class="tituloTabla">Tipo</td>
                  <td class="tituloTabla">Raza</td>
                  <td class="tituloTabla">Elemento</td>
                  <td class="tituloTabla">Armadura</td>
                  </tr>
                <tr>
                  <td colspan="3"><a href="monstruodetallado.php?id=<?php echo $row_Monstruo['id_monstruo']; ?>"><?php echo $row_Monstruo['nombre']; ?> - <?php echo $row_Monstruo['nombre_ingles']; ?></a></td>
                  <td><?php echo $row_Monstruo['nivel']; ?></td>
                  <?php if($row_Monstruo['tipo']==1){?>
                  <td><img  src="images/iconos/tipo/mon.png" alt="Normal" title="Normal"/></td>
                  <?php }else{ ?>
                  <td><img src="images/iconos/tipo/boss.png" alt="Jefe" title="Jefe" /></td>
                  <?php } ?>
                   <?php if($row_Monstruo['raza']==1){?>
                   <td><img src="images/iconos/raza/forester.png" alt="Planta" title="Planta" /></td>
                   <?php }else if($row_Monstruo['raza']==2){?>
                  <td><img src="images/iconos/raza/demon.png" alt="Demonio" title="Demonio" /></td>
                   <?php }else if($row_Monstruo['raza']==3){?>
                  <td><img src="images/iconos/raza/mutant.png" alt="Mutante" title="Mutante" /></td>
                   <?php }else if($row_Monstruo['raza']==4){?>
                  <td><img src="images/iconos/raza/beast.png" alt="Bestia" title="Bestia" /></td>
                   <?php }else if($row_Monstruo['raza']==5){?>
                  <td><img src="images/iconos/raza/insect.png" alt="Insecto" title="Insecto" /></td>
                  <?php } ?>
                  <?php if($row_Monstruo['elemento']==1){?>
                   <td><img src="images/iconos/elementos/poison.png" alt="Veneno" title="Veneno" /></td>
                   <?php }else if($row_Monstruo['elemento']==2){?>
                  <td><img src="images/iconos/elementos/dark.png" alt="Oscuridad" title="Oscuridad" /></td>
                  <?php }else if($row_Monstruo['elemento']==3){?>
                  <td><img src="images/iconos/elementos/earth.png" alt="Tierra" title="Tierra" /></td>
                  <?php }else if($row_Monstruo['elemento']==4){?>
                  <td><img src="images/iconos/elementos/fire.png" alt="Fuego" title="Fuego" /></td>
                  <?php }else if($row_Monstruo['elemento']==5){?>
                  <td><img src="images/iconos/elementos/ice.png" alt="Hielo" title="Hielo" /></td>
                  <?php }else if($row_Monstruo['elemento']==6){?>
                  <td><img src="images/iconos/elementos/lightning.png" alt="Rayo" title="Rayo" /></td>
                  <?php }else if($row_Monstruo['elemento']==7){?>
                  <td><img src="images/iconos/elementos/holy.png" alt="Bendito" title="Bendito" /></td>
				  <?php }else if($row_Monstruo['elemento']==8){?>
                  <td><img src="images/iconos/elementos/melee.png" alt="Físico" title="Físico" /></td>
                  <?php } ?>
                  <?php if($row_Monstruo['armadura']==1){?>
                  <td><img src="images/iconos/armaduras/tela.png" alt="Tela" title="Tela"  /></td>
                  <?php }else if($row_Monstruo['armadura']==2){?>
                  <td><img src="images/iconos/armaduras/cuero.png" alt="Cuero" title="Cuero"  /></td>
                  <?php }else if($row_Monstruo['armadura']==3){?>
                  <td><img src="images/iconos/armaduras/placa.png" alt="Placas" title="Placas"  /></td>
                  <?php }else if($row_Monstruo['armadura']==4){?>
                  <td><img src="images/iconos/armaduras/espectral.png" alt="Espectral" title="Espectral"  /></td>
                  <?php } ?>
                  </tr>
                <tr>
                  <td class="tituloTabla">Movimiento</td>
                  <td class="tituloTabla">Velocidad</td>
                  <td class="tituloTabla">PS</td>
                  <td class="tituloTabla" colspan="2">EXP Personaje</td>
                  <td class="tituloTabla" colspan="2">EXP Clase</td>
                  <td class="tituloTabla">Tamaño</td>
                  </tr>
                <tr>
                <?php if($row_Monstruo['movimiento']==1){?>
                  <td><img src="images/iconos/movimiento/normal.png" alt="Normal" title="Normal" /></td>
                  <?php }else if($row_Monstruo['movimiento']==2){?>
                  <td><img src="images/iconos/movimiento/volador.png" alt="Volador" title="Volador" /></td>
				  <?php }else if($row_Monstruo['movimiento']==3){?>
                  <td><img src="images/iconos/movimiento/holding.png" alt="Fijo" title="Fijo" /></td>
                   <?php } ?>
                  <td><?php echo $row_Monstruo['velocidad']; ?></td>
                  <td><?php echo $row_Monstruo['ps']; ?></td>
                  <td colspan="2"><?php echo $row_Monstruo['exp_personaje']; ?></td>
                  <td colspan="2"><?php echo $row_Monstruo['exp_clase']; ?></td>
                  <td><?php echo $row_Monstruo['tamanio']; ?></td>
                  </tr>
                </table>
              </div>
          </div>
          <?php } while ($row_Monstruo = mysqli_fetch_assoc($Monstruo)); ?>
        <?php } // Show if recordset not empty ?>
		<div style="center"><a href="<?php printf("%s?pageNum_Monstruo=%d%s", $currentPage, max(0, $pageNum_Monstruo - 1), $queryString_Monstruo); ?>">Anterior</a></div> <div style="center"><a href="<?php printf("%s?pageNum_Monstruo=%d%s", $currentPage, min($totalPages_Monstruo, $pageNum_Monstruo + 1), $queryString_Monstruo); ?>">Siguiente</a></div>
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
        } else if(($(this).attr('name') === 'race') && $(this).val() === 'Todos') {
            //
        } else if(($(this).attr('name') === 'element') && $(this).val() === 'Todos') {
            //
        } else if(($(this).attr('name') === 'armor') && $(this).val() === 'Todos') {
            //
        } else if(($(this).attr('name') === 'size') && $(this).val() === 'Todos') {
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
        } else if(($(this).attr('name') === 'race') && $(this).val() === 'Todos') {
            $(this).prop('disabled', true);
        } else if(($(this).attr('name') === 'element') && $(this).val() === 'Todos') {
            $(this).prop('disabled', true);
        } else if(($(this).attr('name') === 'armor') && $(this).val() === 'Todos') {
            $(this).prop('disabled', true);
        } else if(($(this).attr('name') === 'size') && $(this).val() === 'Todos') {
            $(this).prop('disabled', true);
        }
    });
    //$("#simple_search_form").submit();
});

</script> 
</html>

<?php
((mysqli_free_result($Monstruo) || (is_object($Monstruo) && (get_class($Monstruo) == "mysqli_result"))) ? true : false);
?>
