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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["Insertar_clase"])) && ($_POST["Insertar_clase"] == "si")) {
	$dir_destino_imagen = 'images/objetos/';
	$imagen_subida_avatar = $dir_destino_imagen . basename($_FILES['imagen']['name']);

if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
				if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_subida_avatar)) {
  $insertSQL = sprintf("INSERT INTO objeto (nombre, nombre_ingles, nivel, descripcion, tipo_danio, clases, imagen) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['nombre_ingles'], "text"),
                       GetSQLValueString($_POST['nivel'], "int"),
					   GetSQLValueString($_POST['descripcion'], "text"),
					   GetSQLValueString($_POST['tipo_danio'], "text"),
					   GetSQLValueString($_POST['clases'], "text"),
					   GetSQLValueString($imagen_subida_avatar, "text"));

  ((bool)mysqli_query( $tos, "USE " . $database_tos));
  $Result1 = mysqli_query( $tos, $insertSQL) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
  //echo "El archivo es fue cargado exitosamente.\n";
			//echo "<img src='http://localhost/tosbase/images/clases/avatar/". basename($imagen_subida_avatar) ."' />";
			//echo "<img src='http://localhost/tosbase/images/clases/logo/". basename($imagen_subida_logo) ."' />";
		} else {
		echo "Posible ataque de carga de archivos!\n";
		}
	}else{
		echo "Posible ataque del archivo subido: ";
		echo "nombre del archivo '". $_FILES['archivo_usuario']['tmp_name'] . "'.";
	
  }
}
?>
<?php include("includes/sesiones.php"); ?>
<?php
	if(!$user->data['is_registered'] || $typeuser!=3) {
	header( 'Location: http://www.tosbase.es' ) ; 
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
<title>Añadir Objeto - Tree of Savior Fan Base Hispana</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/tosbase.css"/>
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
    <script>
          function readimgImagen(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagen')
                        .attr('src', e.target.result)
                        .width(120)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }     
		</script>
     <div class="titulo"><h1 style="margin-left:0; margin-right:0;">Añadir objetos</h1></div> 
     <div class="row">
       <form role="form" action="<?php echo $editFormAction; ?>" enctype="multipart/form-data" method="post" name="formClase" id="formClase">
         <table align="center">
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Nombre:</td>
             <td><input type="text" class="form-control" name="nombre" value="" size="32" required/></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Nombre inglés:</td>
             <td><input type="text" class="form-control" name="nombre_ingles" value="" size="32" required/></td>
           </tr>           
            <tr valign="baseline">
             <td nowrap="nowrap" align="right">Nivel:</td>
             <td><input type="number" class="form-control" name="nivel" min="1" max="400" required></td>
           </tr>
		   <tr valign="baseline">
             <td nowrap="nowrap" align="right" valign="top">Descripcion:</td>
             <td><textarea class="form-control" name="descripcion" cols="50" rows="5" required></textarea></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Tipo de objeto:</td>
             <td><input type="text" class="form-control" name="tipo_danio" value="" size="32" required/></td>
           </tr>
		   <tr valign="baseline">
             <td nowrap="nowrap" align="right">Clases que lo pueden usar:</td>
             <td><input type="text" class="form-control" name="clases" value="" size="32" required/></td>
           </tr>   
		   <tr valign="baseline">
             <td nowrap="nowrap" align="right">Imagen:</td>
             <td><input type="file" name="imagen" onchange="readimgImagen(this);" required/> <img id="imagen" /></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">&nbsp;</td>
             <td><input class="btn btn-default"  type="submit" value="Crear objeto" /></td>
           </tr>
         </table>
         <input type="hidden" name="Insertar_clase" value="si" />
       </form>
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
