<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["enviar"])) && ($_POST["enviar"] == "registrar")) {
	$form_pass = $_POST['password'];  
    $hash = password_hash($form_pass, PASSWORD_BCRYPT); 
	
  $insertSQL = sprintf("INSERT INTO usuario (usuario, contrasenia, email) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['apodo'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  ((bool)mysqli_query( $tos, "USE " . $database_tos));
  $Result1 = mysqli_query( $tos, $insertSQL) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
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
<title>Tree of Savior Fan Base Hispana</title>
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
     <div class="titulo"><h1 style="margin-left:0; margin-right:0;">Registro de usuario</h1></div> 
     <div class="row">
       <form role="form" action="<?php echo $editFormAction; ?>" method="post" name="formRegistro" id="formRegistro">
         <table align="center">
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Nombre de usuario:</td>
             <td><input class="form-control" type="text" name="apodo" value="" maxlength="30" size="32" placeholder="Apodo" required/></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Correo:</td>
             <td><input class="form-control" type="email" name="email" value="" size="32" placeholder="Correo@dominio.com" required/></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Contraseña:</td>
             <td><input class="form-control" type="password" name="password"  value="" size="32" placeholder="******" required/></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">Repite la contraseña:</td>
             <td><input class="form-control" type="password" name="confirm_password" value="" size="32" placeholder="******" required/></td>
           </tr>
           <tr valign="baseline">
             <td nowrap="nowrap" align="right">&nbsp;</td>
             <td><input class="btn btn-default" type="submit" value="Registrarse" /></td>
           </tr>
         </table>
         <input type="hidden" name="enviar" value="registrar" />
       </form>
       <p>&nbsp;</p>
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