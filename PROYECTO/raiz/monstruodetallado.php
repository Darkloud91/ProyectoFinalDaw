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
$query_Consultamonstruodetallado = "SELECT * FROM monstruo WHERE monstruo.id_monstruo=$id";
$Consultamonstruodetallado = mysqli_query( $tos, $query_Consultamonstruodetallado) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_Consultamonstruodetallado = mysqli_fetch_assoc($Consultamonstruodetallado);
$totalRows_Consultamonstruodetallado = mysqli_num_rows($Consultamonstruodetallado);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $row_Consultamonstruodetallado['nombre']; ?> - Tree of Savior Fan Base Hispana</title>
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
    <a href="monstruos"> Monstruos </a> • <?php echo $row_Consultamonstruodetallado['nombre']; ?>
    </div> 
    <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;"><?php echo $row_Consultamonstruodetallado['nombre']; ?> - <?php echo $row_Consultamonstruodetallado['nombre_ingles']; ?></h1>
      </div>
     <div class="row">
            <div class="table table-responsive col-md-12">
              <table align="center" style="text-align:center; vertical-align:middle" class="table table-bordered" width="100%">
                <tr>
                  <td rowspan="4"><img width="80px" src="<?php echo $row_Consultamonstruodetallado['imagen']; ?>"/></td>
                  <td class="tituloTabla" colspan="3">Nombre</td>
                  <td class="tituloTabla">Nivel</td>
                  <td class="tituloTabla">Tipo</td>
                  <td class="tituloTabla">Raza</td>
                  <td class="tituloTabla">Elemento</td>
                  <td class="tituloTabla">Armadura</td>
                  </tr>
                <tr>
                  <td colspan="3"><?php echo $row_Consultamonstruodetallado['nombre']; ?> - <?php echo $row_Consultamonstruodetallado['nombre_ingles']; ?></td>
                  <td><?php echo $row_Consultamonstruodetallado['nivel']; ?></td>
                  <?php if($row_Consultamonstruodetallado['tipo']==1){?>
                  <td><img  src="images/iconos/tipo/mon.png" alt="Normal" title="Normal"/></td>
                  <?php }else{ ?>
                  <td><img src="images/iconos/tipo/boss.png" alt="Jefe" title="Jefe" /></td>
                  <?php } ?>
                   <?php if($row_Consultamonstruodetallado['raza']==1){?>
                   <td><img src="images/iconos/raza/forester.png" alt="Planta" title="Planta" /></td>
                   <?php }else if($row_Consultamonstruodetallado['raza']==2){?>
                  <td><img src="images/iconos/raza/demon.png" alt="Demonio" title="Demonio" /></td>
                   <?php }else if($row_Consultamonstruodetallado['raza']==3){?>
                  <td><img src="images/iconos/raza/mutant.png" alt="Mutante" title="Mutante" /></td>
                   <?php }else if($row_Consultamonstruodetallado['raza']==4){?>
                  <td><img src="images/iconos/raza/beast.png" alt="Bestia" title="Bestia" /></td>
                   <?php }else if($row_Consultamonstruodetallado['raza']==5){?>
                  <td><img src="images/iconos/raza/insect.png" alt="Insecto" title="Insecto" /></td>
                  <?php } ?>
                  <?php if($row_Consultamonstruodetallado['elemento']==1){?>
                   <td><img src="images/iconos/elementos/poison.png" alt="Veneno" title="Veneno" /></td>
                   <?php }else if($row_Consultamonstruodetallado['elemento']==2){?>
                  <td><img src="images/iconos/elementos/dark.png" alt="Oscuridad" title="Oscuridad" /></td>
                  <?php }else if($row_Consultamonstruodetallado['elemento']==3){?>
                  <td><img src="images/iconos/elementos/earth.png" alt="Tierra" title="Tierra" /></td>
                  <?php }else if($row_Consultamonstruodetallado['elemento']==4){?>
                  <td><img src="images/iconos/elementos/fire.png" alt="Fuego" title="Fuego" /></td>
                  <?php }else if($row_Consultamonstruodetallado['elemento']==5){?>
                  <td><img src="images/iconos/elementos/ice.png" alt="Hielo" title="Hielo" /></td>
                  <?php }else if($row_Consultamonstruodetallado['elemento']==6){?>
                  <td><img src="images/iconos/elementos/lightning.png" alt="Rayo" title="Rayo" /></td>
                  <?php }else if($row_Consultamonstruodetallado['elemento']==7){?>
                  <td><img src="images/iconos/elementos/holy.png" alt="Bendito" title="Bendito" /></td>
				  <?php }else if($row_Consultamonstruodetallado['elemento']==8){?>
                  <td><img src="images/iconos/elementos/melee.png" alt="Físico" title="Físico" /></td>
                  <?php } ?>
                  <?php if($row_Consultamonstruodetallado['armadura']==1){?>
                  <td><img src="images/iconos/armaduras/tela.png" alt="Tela" title="Tela"  /></td>
                  <?php }else if($row_Consultamonstruodetallado['armadura']==2){?>
                  <td><img src="images/iconos/armaduras/cuero.png" alt="Cuero" title="Cuero"  /></td>
                  <?php }else if($row_Consultamonstruodetallado['armadura']==3){?>
                  <td><img src="images/iconos/armaduras/placa.png" alt="Placas" title="Placas"  /></td>
                  <?php }else if($row_Consultamonstruodetallado['armadura']==4){?>
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
                <?php if($row_Consultamonstruodetallado['movimiento']==1){?>
                  <td><img src="images/iconos/movimiento/normal.png" alt="Normal" title="Normal" /></td>
                  <?php }else if($row_Consultamonstruodetallado['movimiento']==2){?>
                  <td><img src="images/iconos/movimiento/volador.png" alt="Volador" title="Volador" /></td>
				  <?php }else if($row_Consultamonstruodetallado['movimiento']==3){?>
                  <td><img src="images/iconos/movimiento/holding.png" alt="Fijo" title="Fijo" /></td>
                   <?php } ?>
                  <td><?php echo $row_Consultamonstruodetallado['velocidad']; ?></td>
                  <td><?php echo $row_Consultamonstruodetallado['ps']; ?></td>
                  <td colspan="2"><?php echo $row_Consultamonstruodetallado['exp_personaje']; ?></td>
                  <td colspan="2"><?php echo $row_Consultamonstruodetallado['exp_clase']; ?></td>
                  <td><?php echo $row_Consultamonstruodetallado['tamanio']; ?></td>
                  </tr>
				  <tr>
				  <td class="tituloTabla" colspan="9">Descripción </td>
				  </tr>
				  <tr>
				  <td colspan="9"><?php echo $row_Consultamonstruodetallado['descripcion']; ?> </td>
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
((mysqli_free_result($row_Consultamonstruodetallado) || (is_object($row_Consultamonstruodetallado) && (get_class($row_Consultamonstruodetallado) == "mysqli_result"))) ? true : false);
?>
