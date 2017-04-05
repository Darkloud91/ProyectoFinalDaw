<?php
function DateToQuotedMySQLDate($Fecha) 
{ 
$Parte1 = substr($Fecha, 0, 10);
$Parte2 = substr($Fecha, 10, 18);

if ($Parte1<>""){ 
   $trozos=explode("/",$Parte1,3); 
   return $trozos[2]."-".$trozos[1]."-".$trozos[0].$Parte2; } 
else 
   {return "NULL";} 
} 

function MySQLDateToDateHORA($MySQLFecha) 
{ 
if (($MySQLFecha == "") or ($MySQLFecha == "0000-00-00") ) 
    {return "";} 
else 
    {return date("H:i",strtotime($MySQLFecha));} 
} 

function MySQLDateToDateDIA($MySQLFecha) 
{ 
if (($MySQLFecha == "") or ($MySQLFecha == "0000-00-00") ) 
    {return "";} 
else 
    {return date("d/m/Y",strtotime($MySQLFecha));} 
}

?>