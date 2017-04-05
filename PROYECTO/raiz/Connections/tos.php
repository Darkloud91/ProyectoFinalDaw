<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_tos = "db626351678.db.1and1.com";
$database_tos = "db626351678";
$username_tos = "dbo626351678";
$password_tos = "Bakemonogatari1991";
$tos = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname_tos,  $username_tos,  $password_tos)) or trigger_error(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)),E_USER_ERROR); 
mysqli_set_charset($tos,"utf8");
?>