<?php
define('IN_PHPBB', true); // se dice que se usa el phpbb.  
$phpbb_root_path = $_SERVER['DOCUMENT_ROOT'] .'/foro/'; // direccion directa del servidor a tu phpBB  
$phpbb_url_path = 'http://www.tosbase.es/foro/'; // la url tu phpbb3  
$phpEx = substr(strrchr(__FILE__, '.'), 1); // extension  
include($phpbb_root_path . 'common.' . $phpEx); // se incluye common.php 
include($phpbb_root_path . 'config.' . $phpEx); //se incluye para la info de tu base de datos como conexion, etc 
include($phpbb_root_path . 'includes/functions_display.' . $phpEx); 
include($phpbb_root_path . 'includes/bbcode.' . $phpEx); 
// iniciamos sesion  
$user->session_begin();  
$auth->acl($user->data);  
$user->setup(); 

if($user->data['is_registered'])  
{  
//en phpbb3_ suponemos que el prefijo de la tabla es phpbb3_  
$avvy = "SELECT * FROM phpbb_users WHERE user_id =" . $user->data['user_id'];  
$result = $db->sql_query($avvy);  
  
while($row = mysqli_fetch_array($result))  
{  
$username = $row['username'];
$iduser = $row['user_id'];
$typeuser = $row['user_type'];
$link = $row['user_avatar'];
$width = $row['user_avatar_width'];
$height = $row['user_avatar_height'];
$width = 80;  
$height = 80;   
}
}
?>