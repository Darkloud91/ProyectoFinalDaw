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

$maxRows_Noticias = 10;
$pageNum_Noticias = 0;
if (isset($_GET['pageNum_Noticias'])) {
  $pageNum_Noticias = $_GET['pageNum_Noticias'];
}
$startRow_Noticias = $pageNum_Noticias * $maxRows_Noticias;

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_Noticias = "select * from phpbb_users inner join noticia on phpbb_users.user_id=noticia.id_usuario order by fecha desc";
$query_limit_Noticias = sprintf("%s LIMIT %d, %d", $query_Noticias, $startRow_Noticias, $maxRows_Noticias);
$Noticias = mysqli_query( $tos, $query_limit_Noticias) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Noticias = mysqli_fetch_assoc($Noticias);

if (isset($_GET['totalRows_Noticias'])) {
  $totalRows_Noticias = $_GET['totalRows_Noticias'];
} else {
  $all_Noticias = mysqli_query($GLOBALS["___mysqli_ston"], $query_Noticias);
  $totalRows_Noticias = mysqli_num_rows($all_Noticias);
}
$totalPages_Noticias = ceil($totalRows_Noticias/$maxRows_Noticias)-1;
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
    <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;">Noticias <a href="content/rss/news.xml" target="_blank"><img src="images/feed-icon-24x24.png" alt="RSS Feed" style="vertical-align: middle;"/></a></h1>  	
      </div>
    <?php do { ?>
      <div class="row">
        <div class="col-lg-11">
          <table align="left" style="text-align:left; vertical-align:middle" class="table borderless table-bordered" width="100%">
            <tr>
              <td rowspan="4" ><img width="200px" src="<?php echo $row_Noticias['imagen']; ?>"  /></td>
                <td rowspan="1" align="left" style="text-align:left;"><span style="font-size: 23px; font-weight:bold"><a href="<?php echo $row_Noticias['ref']; ?>" ><?php echo $row_Noticias['titulo']; ?></a></span><br />
                  <span style="font-size:10px;">Escrito por <a href="http://www.tosbase.es/foro/memberlist.php?mode=viewprofile&u=<?php echo $row_Noticias['id_usuario']; ?>"><?php echo $row_Noticias['username']; ?></a> (<?php echo $row_Noticias['fecha']; ?>)</span></td>
                </tr>
            <tr>
              <td rowspan="2"><?php echo $row_Noticias['descripcion']; ?><a href="<?php echo $row_Noticias['ref']; ?>" >Leer más...</a></td>
              
              </tr>
              <tr>
              </tr>
                <tr>
              <td><span style=" display: inline-block; text-align: center; width: 80px; left: 308px; bottom: 5px; background-color: darkorange; color: #ffffff; padding: 5px; font-size: 0.8em; font-weight: bold;"><?php $tipo; if($row_Noticias['tipo']==1){echo $tipo="Noticia";}else if($row_Noticias['tipo']==2){echo $tipo="Parche Español";}else if($row_Noticias['tipo']==3){echo $tipo="Notas de Parche";} ?></span></td>              
              </tr>
            </table>
          </div>
      </div>
      <?php } while ($row_Noticias = mysqli_fetch_assoc($Noticias)); ?>
    <!-- InstanceEndEditable --></div>
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
((mysqli_free_result($Noticias) || (is_object($Noticias) && (get_class($Noticias) == "mysqli_result"))) ? true : false);
?>
