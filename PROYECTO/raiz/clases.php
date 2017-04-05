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

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango2Swordman = "SELECT * FROM clase WHERE clase.rango=2 AND clase.tipo=1";
$TablaClaseRango2Swordman = mysqli_query( $tos, $query_TablaClaseRango2Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango2Swordman = mysqli_fetch_assoc($TablaClaseRango2Swordman);
$totalRows_TablaClaseRango2Swordman = mysqli_num_rows($TablaClaseRango2Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango2Archer = "SELECT * FROM clase WHERE clase.rango=2 AND clase.tipo=2";
$TablaClaseRango2Archer = mysqli_query( $tos, $query_TablaClaseRango2Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango2Archer = mysqli_fetch_assoc($TablaClaseRango2Archer);
$totalRows_TablaClaseRango2Archer = mysqli_num_rows($TablaClaseRango2Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango2Cleric = "SELECT * FROM clase WHERE clase.rango=2 AND clase.tipo=3";
$TablaClaseRango2Cleric = mysqli_query( $tos, $query_TablaClaseRango2Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango2Cleric = mysqli_fetch_assoc($TablaClaseRango2Cleric);
$totalRows_TablaClaseRango2Cleric = mysqli_num_rows($TablaClaseRango2Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango2Wizard = "SELECT * FROM clase WHERE clase.rango=2 AND clase.tipo=4";
$TablaClaseRango2Wizard = mysqli_query( $tos, $query_TablaClaseRango2Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango2Wizard = mysqli_fetch_assoc($TablaClaseRango2Wizard);
$totalRows_TablaClaseRango2Wizard = mysqli_num_rows($TablaClaseRango2Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango3Swordman = "SELECT * FROM clase WHERE clase.rango=3 AND clase.tipo=1";
$TablaClaseRango3Swordman = mysqli_query( $tos, $query_TablaClaseRango3Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango3Swordman = mysqli_fetch_assoc($TablaClaseRango3Swordman);
$totalRows_TablaClaseRango3Swordman = mysqli_num_rows($TablaClaseRango3Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango3Archer = "SELECT * FROM clase WHERE clase.rango=3 AND clase.tipo=2";
$TablaClaseRango3Archer = mysqli_query( $tos, $query_TablaClaseRango3Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango3Archer = mysqli_fetch_assoc($TablaClaseRango3Archer);
$totalRows_TablaClaseRango3Archer = mysqli_num_rows($TablaClaseRango3Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango3Cleric = "SELECT * FROM clase WHERE clase.rango=3 AND clase.tipo=3";
$TablaClaseRango3Cleric = mysqli_query( $tos, $query_TablaClaseRango3Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango3Cleric = mysqli_fetch_assoc($TablaClaseRango3Cleric);
$totalRows_TablaClaseRango3Cleric = mysqli_num_rows($TablaClaseRango3Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango3Wizard = "SELECT * FROM clase WHERE clase.rango=3 AND clase.tipo=4";
$TablaClaseRango3Wizard = mysqli_query( $tos, $query_TablaClaseRango3Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango3Wizard = mysqli_fetch_assoc($TablaClaseRango3Wizard);
$totalRows_TablaClaseRango3Wizard = mysqli_num_rows($TablaClaseRango3Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango4Swordman = "SELECT * FROM clase WHERE clase.rango=4 AND clase.tipo=1";
$TablaClaseRango4Swordman = mysqli_query( $tos, $query_TablaClaseRango4Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango4Swordman = mysqli_fetch_assoc($TablaClaseRango4Swordman);
$totalRows_TablaClaseRango4Swordman = mysqli_num_rows($TablaClaseRango4Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango4Archer = "SELECT * FROM clase WHERE clase.rango=4 AND clase.tipo=2";
$TablaClaseRango4Archer = mysqli_query( $tos, $query_TablaClaseRango4Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango4Archer = mysqli_fetch_assoc($TablaClaseRango4Archer);
$totalRows_TablaClaseRango4Archer = mysqli_num_rows($TablaClaseRango4Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango4Cleric = "SELECT * FROM clase WHERE clase.rango=4 AND clase.tipo=3";
$TablaClaseRango4Cleric = mysqli_query( $tos, $query_TablaClaseRango4Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango4Cleric = mysqli_fetch_assoc($TablaClaseRango4Cleric);
$totalRows_TablaClaseRango4Cleric = mysqli_num_rows($TablaClaseRango4Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango4Wizard = "SELECT * FROM clase WHERE clase.rango=4 AND clase.tipo=4";
$TablaClaseRango4Wizard = mysqli_query( $tos, $query_TablaClaseRango4Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango4Wizard = mysqli_fetch_assoc($TablaClaseRango4Wizard);
$totalRows_TablaClaseRango4Wizard = mysqli_num_rows($TablaClaseRango4Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5Swordman = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=1";
$TablaClaseRango5Swordman = mysqli_query( $tos, $query_TablaClaseRango5Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5Swordman = mysqli_fetch_assoc($TablaClaseRango5Swordman);
$totalRows_TablaClaseRango5Swordman = mysqli_num_rows($TablaClaseRango5Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5Archer = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=2";
$TablaClaseRango5Archer = mysqli_query( $tos, $query_TablaClaseRango5Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5Archer = mysqli_fetch_assoc($TablaClaseRango5Archer);
$totalRows_TablaClaseRango5Archer = mysqli_num_rows($TablaClaseRango5Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5Cleric = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=3";
$TablaClaseRango5Cleric = mysqli_query( $tos, $query_TablaClaseRango5Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5Cleric = mysqli_fetch_assoc($TablaClaseRango5Cleric);
$totalRows_TablaClaseRango5Cleric = mysqli_num_rows($TablaClaseRango5Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5Wizard = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=4";
$TablaClaseRango5Wizard = mysqli_query( $tos, $query_TablaClaseRango5Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5Wizard = mysqli_fetch_assoc($TablaClaseRango5Wizard);
$totalRows_TablaClaseRango5Wizard = mysqli_num_rows($TablaClaseRango5Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5OSwordman = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=11";
$TablaClaseRango5OSwordman = mysqli_query( $tos, $query_TablaClaseRango5OSwordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5OSwordman = mysqli_fetch_assoc($TablaClaseRango5OSwordman);
$totalRows_TablaClaseRango5OSwordman = mysqli_num_rows($TablaClaseRango5OSwordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5OArcher = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=21";
$TablaClaseRango5OArcher = mysqli_query( $tos, $query_TablaClaseRango5OArcher) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5OArcher = mysqli_fetch_assoc($TablaClaseRango5OArcher);
$totalRows_TablaClaseRango5OArcher = mysqli_num_rows($TablaClaseRango5OArcher);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5OCleric = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=31";
$TablaClaseRango5OCleric = mysqli_query( $tos, $query_TablaClaseRango5OCleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5OCleric = mysqli_fetch_assoc($TablaClaseRango5OCleric);
$totalRows_TablaClaseRango5OCleric = mysqli_num_rows($TablaClaseRango5OCleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango5OWizard = "SELECT * FROM clase WHERE clase.rango=5 AND clase.tipo=41";
$TablaClaseRango5OWizard = mysqli_query( $tos, $query_TablaClaseRango5OWizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango5OWizard = mysqli_fetch_assoc($TablaClaseRango5OWizard);
$totalRows_TablaClaseRango5OWizard = mysqli_num_rows($TablaClaseRango5OWizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6Swordman = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=1";
$TablaClaseRango6Swordman = mysqli_query( $tos, $query_TablaClaseRango6Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6Swordman = mysqli_fetch_assoc($TablaClaseRango6Swordman);
$totalRows_TablaClaseRango6Swordman = mysqli_num_rows($TablaClaseRango6Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6Archer = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=2";
$TablaClaseRango6Archer = mysqli_query( $tos, $query_TablaClaseRango6Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6Archer = mysqli_fetch_assoc($TablaClaseRango6Archer);
$totalRows_TablaClaseRango6Archer = mysqli_num_rows($TablaClaseRango6Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6Cleric = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=3";
$TablaClaseRango6Cleric = mysqli_query( $tos, $query_TablaClaseRango6Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6Cleric = mysqli_fetch_assoc($TablaClaseRango6Cleric);
$totalRows_TablaClaseRango6Cleric = mysqli_num_rows($TablaClaseRango6Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6Wizard = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=4";
$TablaClaseRango6Wizard = mysqli_query( $tos, $query_TablaClaseRango6Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6Wizard = mysqli_fetch_assoc($TablaClaseRango6Wizard);
$totalRows_TablaClaseRango6Wizard = mysqli_num_rows($TablaClaseRango6Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6OSwordman = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=11";
$TablaClaseRango6OSwordman = mysqli_query( $tos, $query_TablaClaseRango6OSwordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6OSwordman = mysqli_fetch_assoc($TablaClaseRango6OSwordman);
$totalRows_TablaClaseRango6OSwordman = mysqli_num_rows($TablaClaseRango6OSwordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6OArcher = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=21";
$TablaClaseRango6OArcher = mysqli_query( $tos, $query_TablaClaseRango6OArcher) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6OArcher = mysqli_fetch_assoc($TablaClaseRango6OArcher);
$totalRows_TablaClaseRango6OArcher = mysqli_num_rows($TablaClaseRango6OArcher);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6OCleric = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=31";
$TablaClaseRango6OCleric = mysqli_query( $tos, $query_TablaClaseRango6OCleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6OCleric = mysqli_fetch_assoc($TablaClaseRango6OCleric);
$totalRows_TablaClaseRango6OCleric = mysqli_num_rows($TablaClaseRango6OCleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango6OWizard = "SELECT * FROM clase WHERE clase.rango=6 AND clase.tipo=41";
$TablaClaseRango6OWizard = mysqli_query( $tos, $query_TablaClaseRango6OWizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango6OWizard = mysqli_fetch_assoc($TablaClaseRango6OWizard);
$totalRows_TablaClaseRango6OWizard = mysqli_num_rows($TablaClaseRango6OWizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7Swordman = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=1";
$TablaClaseRango7Swordman = mysqli_query( $tos, $query_TablaClaseRango7Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7Swordman = mysqli_fetch_assoc($TablaClaseRango7Swordman);
$totalRows_TablaClaseRango7Swordman = mysqli_num_rows($TablaClaseRango7Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7Archer = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=2";
$TablaClaseRango7Archer = mysqli_query( $tos, $query_TablaClaseRango7Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7Archer = mysqli_fetch_assoc($TablaClaseRango7Archer);
$totalRows_TablaClaseRango7Archer = mysqli_num_rows($TablaClaseRango7Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7Cleric = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=3";
$TablaClaseRango7Cleric = mysqli_query( $tos, $query_TablaClaseRango7Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7Cleric = mysqli_fetch_assoc($TablaClaseRango7Cleric);
$totalRows_TablaClaseRango7Cleric = mysqli_num_rows($TablaClaseRango7Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7Wizard = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=4";
$TablaClaseRango7Wizard = mysqli_query( $tos, $query_TablaClaseRango7Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7Wizard = mysqli_fetch_assoc($TablaClaseRango7Wizard);
$totalRows_TablaClaseRango7Wizard = mysqli_num_rows($TablaClaseRango7Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7OSwordman = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=11";
$TablaClaseRango7OSwordman = mysqli_query( $tos, $query_TablaClaseRango7OSwordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7OSwordman = mysqli_fetch_assoc($TablaClaseRango7OSwordman);
$totalRows_TablaClaseRango7OSwordman = mysqli_num_rows($TablaClaseRango7OSwordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7OArcher = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=21";
$TablaClaseRango7OArcher = mysqli_query( $tos, $query_TablaClaseRango7OArcher) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7OArcher = mysqli_fetch_assoc($TablaClaseRango7OArcher);
$totalRows_TablaClaseRango7OArcher = mysqli_num_rows($TablaClaseRango7OArcher);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7OCleric = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=31";
$TablaClaseRango7OCleric = mysqli_query( $tos, $query_TablaClaseRango7OCleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7OCleric = mysqli_fetch_assoc($TablaClaseRango7OCleric);
$totalRows_TablaClaseRango7OCleric = mysqli_num_rows($TablaClaseRango7OCleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango7OWizard = "SELECT * FROM clase WHERE clase.rango=7 AND clase.tipo=41";
$TablaClaseRango7OWizard = mysqli_query( $tos, $query_TablaClaseRango7OWizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango7OWizard = mysqli_fetch_assoc($TablaClaseRango7OWizard);
$totalRows_TablaClaseRango7OWizard = mysqli_num_rows($TablaClaseRango7OWizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8Swordman = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=1";
$TablaClaseRango8Swordman = mysqli_query( $tos, $query_TablaClaseRango8Swordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8Swordman = mysqli_fetch_assoc($TablaClaseRango8Swordman);
$totalRows_TablaClaseRango8Swordman = mysqli_num_rows($TablaClaseRango8Swordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8Archer = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=2";
$TablaClaseRango8Archer = mysqli_query( $tos, $query_TablaClaseRango8Archer) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8Archer = mysqli_fetch_assoc($TablaClaseRango8Archer);
$totalRows_TablaClaseRango8Archer = mysqli_num_rows($TablaClaseRango8Archer);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8Cleric = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=3";
$TablaClaseRango8Cleric = mysqli_query( $tos, $query_TablaClaseRango8Cleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8Cleric = mysqli_fetch_assoc($TablaClaseRango8Cleric);
$totalRows_TablaClaseRango8Cleric = mysqli_num_rows($TablaClaseRango8Cleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8Wizard = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=4";
$TablaClaseRango8Wizard = mysqli_query( $tos, $query_TablaClaseRango8Wizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8Wizard = mysqli_fetch_assoc($TablaClaseRango8Wizard);
$totalRows_TablaClaseRango8Wizard = mysqli_num_rows($TablaClaseRango8Wizard);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8OSwordman = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=11";
$TablaClaseRango8OSwordman = mysqli_query( $tos, $query_TablaClaseRango8OSwordman) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8OSwordman = mysqli_fetch_assoc($TablaClaseRango8OSwordman);
$totalRows_TablaClaseRango8OSwordman = mysqli_num_rows($TablaClaseRango8OSwordman);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8OArcher = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=21";
$TablaClaseRango8OArcher = mysqli_query( $tos, $query_TablaClaseRango8OArcher) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8OArcher = mysqli_fetch_assoc($TablaClaseRango8OArcher);
$totalRows_TablaClaseRango8OArcher = mysqli_num_rows($TablaClaseRango8OArcher);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8OCleric = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=31";
$TablaClaseRango8OCleric = mysqli_query( $tos, $query_TablaClaseRango8OCleric) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8OCleric = mysqli_fetch_assoc($TablaClaseRango8OCleric);
$totalRows_TablaClaseRango8OCleric = mysqli_num_rows($TablaClaseRango8OCleric);

((bool)mysqli_query( $tos, "USE " . $database_tos));
$query_TablaClaseRango8OWizard = "SELECT * FROM clase WHERE clase.rango=8 AND clase.tipo=41";
$TablaClaseRango8OWizard = mysqli_query( $tos, $query_TablaClaseRango8OWizard) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$row_TablaClaseRango8OWizard = mysqli_fetch_assoc($TablaClaseRango8OWizard);
$totalRows_TablaClaseRango8OWizard = mysqli_num_rows($TablaClaseRango8OWizard);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/1Columna.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Clases - Tree of Savior Fan Base Hispana</title>
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
  	  <h1 style="margin-left:0; margin-right:0;">Clases</h1>
      </div>
      <div class="row">
      <div style="margin-left: 15px; margin-right: 15px; margin-bottom: 20px;">      
<p>Tree of Savior cuenta con 4 clases base: Espadachín, Arquero, Clérigo y Mago.</p>
<p>Estas clases base pueden avanzar aún más, hasta un total de 80 clases, cada una con diferentes habilidades.</p>
<p>Esta lista actualmente cuenta con todas las clases conocidas en el Tree of Savior.</p>
      </div>
      </div>      
        <div class="row" >
          <div class="col-md-12 table-responsive">
              <table align="center" style="text-align:center; vertical-align:middle" class="table table-bordered" width="100%">               
                  <tr>
                    <td style ="word-break:break-all;" class="rango1 col-xs-1"><h3>Rango 1</h3></td>
                     <div class="row">
                     <?php do { ?>
                    <td style ="word-break:break-all;" ><div class="col-xs-12"><a class="oculto" href="clasedetallada.php?id=<?php echo $row_TablaClaseRango1['id_clase']; ?>"><b><?php echo $row_TablaClaseRango1['nombre']; ?></b> <p class="ingles"><?php echo $row_TablaClaseRango1['nombre_ingles']; ?></p>
                      <img  src="<?php echo $row_TablaClaseRango1['avatar_tabla']; ?>"/> <span style="overflow:visible"><img src="<?php echo $row_TablaClaseRango1['logo']; ?>" /><br /><?php echo $row_TablaClaseRango1['descripcion']; ?> <br /><br /><b>Tipo:</b> <?php if($row_TablaClaseRango1['funcion']==1){echo "Daño";}else if($row_TablaClaseRango1['funcion']==2){echo "Soporte";}else if($row_TablaClaseRango1['funcion']==3){echo "Defensa";} ?><br /><b>Dificultad:</b> <?php if($row_TablaClaseRango1['dificultad']==1){echo "Facil";}else if($row_TablaClaseRango1['dificultad']==2){echo "Medio";}else if($row_TablaClaseRango1['dificultad']==3){echo "Dificil";} ?></span></a></div> </td>
                       <?php } while ($row_TablaClaseRango1 = mysqli_fetch_assoc($TablaClaseRango1)); ?>
                       </div>
                    </tr>           
                  <tr>
                    <td style ="word-break:break-all;" class="rango2"><h3>Rango 2</h3></td>
                    <td style ="word-break:break-all;">
                    <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango2Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango2Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango2Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango2Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango2Swordman = mysqli_fetch_assoc($TablaClaseRango2Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango2Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango2Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango2Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango2Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango2Archer = mysqli_fetch_assoc($TablaClaseRango2Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					   <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango2Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango2Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango2Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango2Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango2Cleric = mysqli_fetch_assoc($TablaClaseRango2Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango2Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango2Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango2Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango2Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango2Wizard = mysqli_fetch_assoc($TablaClaseRango2Wizard)); ?>
                       </div>
                       </td>
                    </tr>            
                  <tr>
                    <td style ="word-break:break-all;" class="rango3"><h3>Rango 3</h3></td>
                   <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango3Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango3Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango3Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango3Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango3Swordman = mysqli_fetch_assoc($TablaClaseRango3Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango3Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango3Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango3Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango3Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango3Archer = mysqli_fetch_assoc($TablaClaseRango3Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango3Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango3Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango3Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango3Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango3Cleric = mysqli_fetch_assoc($TablaClaseRango3Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango3Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango3Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango3Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango3Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango3Wizard = mysqli_fetch_assoc($TablaClaseRango3Wizard)); ?>
                       </div>
                       </td>
                    </tr>              
                  <tr>
                    <td style ="word-break:break-all;" class="rango4"><h3>Rango 4</h3></td>
                     <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango4Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango4Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango4Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango4Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango4Swordman = mysqli_fetch_assoc($TablaClaseRango4Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango4Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango4Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango4Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango4Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango4Archer = mysqli_fetch_assoc($TablaClaseRango4Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango4Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango4Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango4Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango4Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango4Cleric = mysqli_fetch_assoc($TablaClaseRango4Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango4Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango4Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango4Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango4Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango4Wizard = mysqli_fetch_assoc($TablaClaseRango4Wizard)); ?>
                       </div>
                       </td>
                    </tr>             
                  <tr>
                    <td style ="word-break:break-all;" class="rango5"><h3>Rango 5</h3></td>
                     <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5Swordman = mysqli_fetch_assoc($TablaClaseRango5Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5Archer = mysqli_fetch_assoc($TablaClaseRango5Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5Cleric = mysqli_fetch_assoc($TablaClaseRango5Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5Wizard = mysqli_fetch_assoc($TablaClaseRango5Wizard)); ?>
                       </div>
                       </td>
                    </tr> 
                    <tr>
                    <td class="rango5"><h3>Oculta</h3></td>
                     <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5OSwordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5OSwordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5OSwordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5OSwordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5OSwordman = mysqli_fetch_assoc($TablaClaseRango5OSwordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5OArcher['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5OArcher['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5OArcher['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5OArcher['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5OArcher = mysqli_fetch_assoc($TablaClaseRango5OArcher)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5OCleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5OCleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5OCleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5OCleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5OCleric = mysqli_fetch_assoc($TablaClaseRango5OCleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango5OWizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango5OWizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango5OWizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango5OWizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango5OWizard = mysqli_fetch_assoc($TablaClaseRango5OWizard)); ?>
                       </div>
                       </td>
                    </tr>         
                  <tr>
                    <td style ="word-break:break-all;" class="rango6"><h3>Rango 6</h3></td>
                     <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6Swordman = mysqli_fetch_assoc($TablaClaseRango6Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6Archer = mysqli_fetch_assoc($TablaClaseRango6Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6Cleric = mysqli_fetch_assoc($TablaClaseRango6Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6Wizard = mysqli_fetch_assoc($TablaClaseRango6Wizard)); ?>
                       </div>
                       </td>
                    </tr>
                      <tr>
                    <td class="rango6"><h3>Oculta</h3></td>
                      <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6OSwordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6OSwordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6OSwordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6OSwordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6OSwordman = mysqli_fetch_assoc($TablaClaseRango6OSwordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6OArcher['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6OArcher['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6OArcher['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6OArcher['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6OArcher = mysqli_fetch_assoc($TablaClaseRango6OArcher)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6OCleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6OCleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6OCleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6OCleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6OCleric = mysqli_fetch_assoc($TablaClaseRango6OCleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango6OWizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango6OWizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango6OWizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango6OWizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango6OWizard = mysqli_fetch_assoc($TablaClaseRango6OWizard)); ?>
                       </div>
                       </td>
                    </tr>                       
                  <tr>
                    <td style ="word-break:break-all;" class="rango7"><h3>Rango 7</h3></td>
                     <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7Swordman = mysqli_fetch_assoc($TablaClaseRango7Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7Archer = mysqli_fetch_assoc($TablaClaseRango7Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7Cleric = mysqli_fetch_assoc($TablaClaseRango7Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7Wizard = mysqli_fetch_assoc($TablaClaseRango7Wizard)); ?>
                       </div>
                       </td>
                    </tr> 
                      <tr>
                    <td class="rango7"><h3>Oculta</h3></td>
                      <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7OSwordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7OSwordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7OSwordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7OSwordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7OSwordman = mysqli_fetch_assoc($TablaClaseRango7OSwordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7OArcher['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7OArcher['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7OArcher['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7OArcher['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7OArcher = mysqli_fetch_assoc($TablaClaseRango7OArcher)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7OCleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7OCleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7OCleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7OCleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7OCleric = mysqli_fetch_assoc($TablaClaseRango7OCleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango7OWizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango7OWizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango7OWizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango7OWizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango7OWizard = mysqli_fetch_assoc($TablaClaseRango7OWizard)); ?>
                       </div>
                       </td>
                    </tr>                    
                  <tr>
                    <td style ="word-break:break-all;" class="rango8"><h3>Rango ???</h3></td>
                     <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8Swordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8Swordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8Swordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8Swordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8Swordman = mysqli_fetch_assoc($TablaClaseRango8Swordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8Archer['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8Archer['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8Archer['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8Archer['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8Archer = mysqli_fetch_assoc($TablaClaseRango8Archer)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8Cleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8Cleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8Cleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8Cleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8Cleric = mysqli_fetch_assoc($TablaClaseRango8Cleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8Wizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8Wizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8Wizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8Wizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8Wizard = mysqli_fetch_assoc($TablaClaseRango8Wizard)); ?>
                       </div>
                       </td>
                    </tr>
                      <tr>
                    <td class="rango8"><h3>Oculta</h3></td>
                    <td style ="word-break:break-all;">
                          <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8OSwordman['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8OSwordman['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8OSwordman['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8OSwordman['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8OSwordman = mysqli_fetch_assoc($TablaClaseRango8OSwordman)); ?>
                       </div>
                        </td>
                        <td style ="word-break:break-all;">
                              <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8OArcher['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8OArcher['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8OArcher['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8OArcher['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8OArcher = mysqli_fetch_assoc($TablaClaseRango8OArcher)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8OCleric['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8OCleric['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8OCleric['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8OCleric['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8OCleric = mysqli_fetch_assoc($TablaClaseRango8OCleric)); ?>
                       </div>
                       </td>
                       <td style ="word-break:break-all;">
					         <div class="row">
                     <?php do { ?>
                     <div class="col-xs-6"  style="padding:0px; margin: 0px;">
                  <a href="clasedetallada.php?id=<?php echo $row_TablaClaseRango8OWizard['id_clase']; ?>"><b><?php echo $row_TablaClaseRango8OWizard['nombre']; ?></b> <p class="ingles">				  <?php echo $row_TablaClaseRango8OWizard['nombre_ingles']; ?></p>
                      <img src="<?php echo $row_TablaClaseRango8OWizard['avatar_tabla']; ?>"/></a></div>
                       <?php } while ($row_TablaClaseRango8OWizard = mysqli_fetch_assoc($TablaClaseRango8OWizard)); ?>
                       </div>
                       </td>
                    </tr>         
              </table>
             
        
          </div>
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
<?php
((mysqli_free_result($TablaClaseRango1) || (is_object($TablaClaseRango1) && (get_class($TablaClaseRango1) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango2Swordman) || (is_object($TablaClaseRango2Swordman) && (get_class($TablaClaseRango2Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango2Archer) || (is_object($TablaClaseRango2Archer) && (get_class($TablaClaseRango2Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango2Cleric) || (is_object($TablaClaseRango2Cleric) && (get_class($TablaClaseRango2Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango2Wizard) || (is_object($TablaClaseRango2Wizard) && (get_class($TablaClaseRango2Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango3Swordman) || (is_object($TablaClaseRango3Swordman) && (get_class($TablaClaseRango3Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango3Archer) || (is_object($TablaClaseRango3Archer) && (get_class($TablaClaseRango3Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango3Cleric) || (is_object($TablaClaseRango3Cleric) && (get_class($TablaClaseRango3Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango3Wizard) || (is_object($TablaClaseRango3Wizard) && (get_class($TablaClaseRango3Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango4Swordman) || (is_object($TablaClaseRango4Swordman) && (get_class($TablaClaseRango4Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango4Archer) || (is_object($TablaClaseRango4Archer) && (get_class($TablaClaseRango4Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango4Cleric) || (is_object($TablaClaseRango4Cleric) && (get_class($TablaClaseRango4Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango4Wizard) || (is_object($TablaClaseRango4Wizard) && (get_class($TablaClaseRango4Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5Swordman) || (is_object($TablaClaseRango5Swordman) && (get_class($TablaClaseRango5Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5Archer) || (is_object($TablaClaseRango5Archer) && (get_class($TablaClaseRango5Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5Cleric) || (is_object($TablaClaseRango5Cleric) && (get_class($TablaClaseRango5Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5Wizard) || (is_object($TablaClaseRango5Wizard) && (get_class($TablaClaseRango5Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5OSwordman) || (is_object($TablaClaseRango5OSwordman) && (get_class($TablaClaseRango5OSwordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5OArcher) || (is_object($TablaClaseRango5OArcher) && (get_class($TablaClaseRango5OArcher) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5OCleric) || (is_object($TablaClaseRango5OCleric) && (get_class($TablaClaseRango5OCleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango5OWizard) || (is_object($TablaClaseRango5OWizard) && (get_class($TablaClaseRango5OWizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6Swordman) || (is_object($TablaClaseRango6Swordman) && (get_class($TablaClaseRango6Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6Archer) || (is_object($TablaClaseRango6Archer) && (get_class($TablaClaseRango6Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6Cleric) || (is_object($TablaClaseRango6Cleric) && (get_class($TablaClaseRango6Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6Wizard) || (is_object($TablaClaseRango6Wizard) && (get_class($TablaClaseRango6Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6OSwordman) || (is_object($TablaClaseRango6OSwordman) && (get_class($TablaClaseRango6OSwordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6OArcher) || (is_object($TablaClaseRango6OArcher) && (get_class($TablaClaseRango6OArcher) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6OCleric) || (is_object($TablaClaseRango6OCleric) && (get_class($TablaClaseRango6OCleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango6OWizard) || (is_object($TablaClaseRango6OWizard) && (get_class($TablaClaseRango6OWizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7Swordman) || (is_object($TablaClaseRango7Swordman) && (get_class($TablaClaseRango7Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7Archer) || (is_object($TablaClaseRango7Archer) && (get_class($TablaClaseRango7Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7Cleric) || (is_object($TablaClaseRango7Cleric) && (get_class($TablaClaseRango7Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7Wizard) || (is_object($TablaClaseRango7Wizard) && (get_class($TablaClaseRango7Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7OSwordman) || (is_object($TablaClaseRango7OSwordman) && (get_class($TablaClaseRango7OSwordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7OArcher) || (is_object($TablaClaseRango7OArcher) && (get_class($TablaClaseRango7OArcher) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7OCleric) || (is_object($TablaClaseRango7OCleric) && (get_class($TablaClaseRango7OCleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango7OWizard) || (is_object($TablaClaseRango7OWizard) && (get_class($TablaClaseRango7OWizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8Swordman) || (is_object($TablaClaseRango8Swordman) && (get_class($TablaClaseRango8Swordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8Archer) || (is_object($TablaClaseRango8Archer) && (get_class($TablaClaseRango8Archer) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8Cleric) || (is_object($TablaClaseRango8Cleric) && (get_class($TablaClaseRango8Cleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8Wizard) || (is_object($TablaClaseRango8Wizard) && (get_class($TablaClaseRango8Wizard) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8OSwordman) || (is_object($TablaClaseRango8OSwordman) && (get_class($TablaClaseRango8OSwordman) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8OArcher) || (is_object($TablaClaseRango8OArcher) && (get_class($TablaClaseRango8OArcher) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8OCleric) || (is_object($TablaClaseRango8OCleric) && (get_class($TablaClaseRango8OCleric) == "mysqli_result"))) ? true : false);

((mysqli_free_result($TablaClaseRango8OWizard) || (is_object($TablaClaseRango8OWizard) && (get_class($TablaClaseRango8OWizard) == "mysqli_result"))) ? true : false);
?>