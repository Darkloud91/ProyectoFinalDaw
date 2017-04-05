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
	$dir_destino_avatar_t = 'images/clases/tabla/';
	$imagen_subida_avatar_t = $dir_destino_avatar_t . basename($_FILES['avatar_t']['name']);
	$dir_destino_avatar = 'images/clases/avatar/';
$imagen_subida_avatar_m = $dir_destino_avatar . basename($_FILES['avatar_m']['name']);
$imagen_subida_avatar_f = $dir_destino_avatar . basename($_FILES['avatar_f']['name']);
$dir_destino_logo = 'images/clases/logo/';
$imagen_subida_logo = $dir_destino_logo . basename($_FILES['logo']['name']);

if(is_uploaded_file($_FILES['avatar_m']['tmp_name']) && is_uploaded_file($_FILES['avatar_f']['tmp_name']) && is_uploaded_file($_FILES['logo']['tmp_name'])){
				if (move_uploaded_file($_FILES['avatar_m']['tmp_name'], $imagen_subida_avatar_m) && move_uploaded_file($_FILES['avatar_f']['tmp_name'], $imagen_subida_avatar_f) && move_uploaded_file($_FILES['logo']['tmp_name'], $imagen_subida_logo) && move_uploaded_file($_FILES['avatar_t']['tmp_name'], $imagen_subida_avatar_t)) {
  $insertSQL = sprintf("INSERT INTO clase (nombre, nombre_ingles, rango, tipo, funcion, dificultad, descripcion, circulo, avatar_tabla, avatar_m, avatar_f, logo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['nombre_ingles'], "text"),
                       GetSQLValueString($_POST['rango'], "int"),
                       GetSQLValueString($_POST['tipo'], "int"),
					   GetSQLValueString($_POST['funcion'], "int"),
					   GetSQLValueString($_POST['dificultad'], "int"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['circulo'], "int"),
					   GetSQLValueString($imagen_subida_avatar_t, "text"),
                       GetSQLValueString($imagen_subida_avatar_m, "text"),
					   GetSQLValueString($imagen_subida_avatar_f, "text"),
                       GetSQLValueString($imagen_subida_logo, "text"));

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
<title>Añadir Clase - Tree of Savior Fan Base Hispana</title>
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
          function readimgTabla(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatarTpreview')
                        .attr('src', e.target.result)
                        .width(70)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }     
		function readimgChico(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatarMpreview')
                        .attr('src', e.target.result)
                        .width(70)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }     
		function readimgChica(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatarFpreview')
                        .attr('src', e.target.result)
                        .width(70)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }     
		function readimgLogo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logopreview')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		</script>
     <div class="titulo"><h1 style="margin-left:0; margin-right:0;">Añadir clases</h1></div> 
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
             <td nowrap="nowrap" align="right">Función:</td>
             <td><select class="form-control" name="funcion">
               <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Daño</option>
               <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Soporte</option>
               <option value="3" <?php if (!(strcmp(3, ""))) {echo "SELECTED";} ?>>Defensa</option>
             </select></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Dificultad:</td>
             <td><select class="form-control" name="dificultad">
               <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Fácil </option>
               <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Media</option>
               <option value="3" <?php if (!(strcmp(3, ""))) {echo "SELECTED";} ?>>Difícil</option>
             </select></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Rango:</td>
             <td><select class="form-control" name="rango">
               <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Rango 1</option>
               <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Rango 2</option>
               <option value="3" <?php if (!(strcmp(3, ""))) {echo "SELECTED";} ?>>Rango 3</option>
               <option value="4" <?php if (!(strcmp(4, ""))) {echo "SELECTED";} ?>>Rango 4</option>
               <option value="5" <?php if (!(strcmp(5, ""))) {echo "SELECTED";} ?>>Rango 5</option>
               <option value="6" <?php if (!(strcmp(6, ""))) {echo "SELECTED";} ?>>Rango 6</option>
               <option value="7" <?php if (!(strcmp(7, ""))) {echo "SELECTED";} ?>>Rango 7</option>
               <option value="8" <?php if (!(strcmp(8, ""))) {echo "SELECTED";} ?>>Rango 8</option>
             </select></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Tipo:</td>
             <td><select class="form-control" name="tipo">
               <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Espadachín</option>
               <option value="11" <?php if (!(strcmp(11, ""))) {echo "SELECTED";} ?>>Espadachín Oculto</option>
               <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Arquero</option>
               <option value="21" <?php if (!(strcmp(21, ""))) {echo "SELECTED";} ?>>Arquero Oculto</option>
               <option value="3" <?php if (!(strcmp(3, ""))) {echo "SELECTED";} ?>>Clérigo</option>
               <option value="31" <?php if (!(strcmp(31, ""))) {echo "SELECTED";} ?>>Clérigo Oculto</option>
               <option value="4" <?php if (!(strcmp(4, ""))) {echo "SELECTED";} ?>>Mago</option>
               <option value="41" <?php if (!(strcmp(41, ""))) {echo "SELECTED";} ?>>Mago Oculto</option>
             </select></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right" valign="top">Descripcion:</td>
             <td><textarea class="form-control" name="descripcion" cols="50" rows="5" required></textarea></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Circulo:</td>
             <td><select class="form-control" name="circulo">
               <option value="1" <?php if (!(strcmp(1, ""))) {echo "SELECTED";} ?>>Círculo 1</option>
               <option value="2" <?php if (!(strcmp(2, ""))) {echo "SELECTED";} ?>>Círculo 2</option>
               <option value="3" <?php if (!(strcmp(3, ""))) {echo "SELECTED";} ?>>Círculo 3</option>
             </select></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Avatar Tabla:</td>
             <td><input type="file" name="avatar_t" onchange="readimgTabla(this);" required/> <img id="avatarTpreview" /></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Avatar chico:</td>
             <td><input type="file" name="avatar_m" onchange="readimgChico(this);" required/> <img id="avatarMpreview" /></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Avatar chica:</td>
             <td><input type="file" name="avatar_f" onchange="readimgChica(this);" required/> <img id="avatarFpreview" /></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Logo:</td>
             <td><input type="file" name="logo" onchange="readimgLogo(this);" required/> <img id="logopreview" /></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">&nbsp;</td>
             <td><input class="btn btn-default"  type="submit" value="Crear clase" /></td>
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
