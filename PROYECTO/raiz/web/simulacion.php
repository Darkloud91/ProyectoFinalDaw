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

$maxRows_TablaClaseRango1 = 4;
$pageNum_TablaClaseRango1 = 0;
if (isset($_GET['pageNum_TablaClaseRango1'])) {
  $pageNum_TablaClaseRango1 = $_GET['pageNum_TablaClaseRango1'];
}
$startRow_TablaClaseRango1 = $pageNum_TablaClaseRango1 * $maxRows_TablaClaseRango1;

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango1 = "SELECT * FROM clase WHERE rango = 1 AND circulo = 1";
$query_limit_TablaClaseRango1 = sprintf("%s LIMIT %d, %d", $query_TablaClaseRango1, $startRow_TablaClaseRango1, $maxRows_TablaClaseRango1);
$TablaClaseRango1 = mysqli_query( $tos, $query_limit_TablaClaseRango1) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango1 = mysqli_fetch_assoc($TablaClaseRango1);

if (isset($_GET['totalRows_TablaClaseRango1'])) {
  $totalRows_TablaClaseRango1 = $_GET['totalRows_TablaClaseRango1'];
} else {
  $all_TablaClaseRango1 = mysqli_query($GLOBALS["___mysqli_ston"], $query_TablaClaseRango1);
  $totalRows_TablaClaseRango1 = mysqli_num_rows($all_TablaClaseRango1);
}
$totalPages_TablaClaseRango1 = ceil($totalRows_TablaClaseRango1/$maxRows_TablaClaseRango1)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/simulacion.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
    <div class="col2 col-md-7 content"><!-- InstanceBeginEditable name="contenido" -->
     <div class="titulo">
  	  <h1 style="margin-left:0; margin-right:0;">Simulador de clases</h1>
      </div> 
           <div class="row">
<div class="col-sm-12" style="padding: 10px; padding-bottom: 15px; text-align: left;">
	<a href="simulador" class="btn btn-info">Simulador</a>
    <a href="simuladorPublic" class="btn btn-info">Simulaciones públicas</a>
    <a href="simuladorMias" class="btn btn-info">Mis simulaciones</a>
</div>   
</div>
 <div class="row">
<div class="col-md-12 table-responsive">
<table id="tableJson" align="center" style="text-align:center; vertical-align:middle" class="table borderless" width="100%">               
                  <thead>
                  <tr id="rango1">
                    <td style ="word-break:break-all;" class="rango1 col-xs-1"><h3>Rango 1</h3></td>
                  
                     <?php  do { ?>
                    <td>   <div class="row">
                    	<div class="col-xs-12">
                        <a class="claseClicker" id="<?php echo $row_TablaClaseRango1['tipo']; ?>">
                      <img  src="<?php echo $row_TablaClaseRango1['logo']; ?>"/></a>
                      <b><?php echo $row_TablaClaseRango1['nombre']; ?></b></div></div>   
                      </td>                      
                       <?php  } while ($row_TablaClaseRango1 = mysqli_fetch_assoc($TablaClaseRango1)); ?>
                       
                    </tr> 
                   </thead>
                   <tbody>
                   	<tr id="rango2" style="display:none">
                    <td style ="word-break:break-all;" class="rango2 col-xs-1"><h3>Rango 2</h3></td>
                   </tr>
                     <tr id="rango3" style="display:none">
                    <td style ="word-break:break-all;" class="rango3 col-xs-1"><h3>Rango 3</h3></td>
                   </tr>
                     <tr id="rango4" style="display:none">
                    <td style ="word-break:break-all;" class="rango4 col-xs-1"><h3>Rango 4</h3></td>
                   </tr>
                     <tr id="rango5" style="display:none">
                    <td style ="word-break:break-all;" class="rango5 col-xs-1"><h3>Rango 5</h3></td>
                   </tr>
                     <tr id="rango6" style="display:none">
                    <td style ="word-break:break-all;" class="rango6 col-xs-1"><h3>Rango 6</h3></td>
                   </tr>
                     <tr id="rango7" style="display:none">
                    <td style ="word-break:break-all;" class="rango7 col-xs-1"><h3>Rango 7</h3></td>
                   </tr>
                   </tbody>
        </table>
</div>
</div>
     <!-- InstanceEndEditable --></div>
    <div class="col2 col-md-5 sidebar1">
      <?php include("includes/estadisticas.php"); ?>
    </div>
  </div>
  <div class="row footer row2">
    <?php include("includes/footer.php"); ?>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd -->
<script>
/*$(document).ready(function(){
    $(".claseClicker").click(function(){
        $.getJSON( "http://www.tosbase.es/web/contenido/json", function( data ) {
  		var items = [];
 		 $.each( data, function( key, val ) {
  		  items.push( "<li id='" + key + "'>" + val + "</li>" );
  		});
 
  		$( "<ul/>", {
   		 "class": "my-new-list",
   		 html: items.join( "" )
 		 }).appendTo( "body" );
		});
    });
});*/
$(document).ready(function(){
	$(document).on("click",".claseClicker", function(){
		var id=$(this).attr("id");
		var rango=$(this).closest('tr').attr('id');
		var idRango;
		if(rango=="rango1"){
			rango=2;
			idRango="rango2";
			}if(rango=="rango2"){
			rango=3;
			idRango="rango3";
			}if(rango=="rango3"){
			rango=4;
			idRango="rango4";
			}if(rango=="rango4"){
			rango=5;
			idRango="rango5";
			}if(rango=="rango5"){
			rango=6;
			idRango="rango6";
			}if(rango=="rango6"){
			rango=7;
			idRango="rango7";
			}if(rango=="rango7"){
			rango=7;
			idRango="rango7";
			}
		var url="http://www.tosbase.es/web/contenido/json.php?tipo="+id+"&rango="+rango+"";
		$.getJSON(url,function(clases){
		$("#"+idRango+"").find('td:not(:first)').remove();
		$.each(clases, function(i,clases){
			var newRow =
			"<td><a class='claseClicker' id='"+clases.tipo+"'><img src='"+clases.logo+"'/></a><b>"+clases.nombre+"</b></td>";
			$(newRow).appendTo("#"+idRango+"");
		});
		$("#"+idRango+"").css("display", "block");
	});
});
});
</script>
</html>
<?php
((mysqli_free_result($TablaClaseRango1) || (is_object($TablaClaseRango1) && (get_class($TablaClaseRango1) == "mysqli_result"))) ? true : false);
?>