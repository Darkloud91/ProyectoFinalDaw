<?php include("includes/sesiones.php"); ?>
<?php  
if($user->data['is_registered'])  
{  
//en phpbb3_ suponemos que el prefijo de la tabla es phpbb3_  
$avvy = "SELECT * FROM phpbb_users WHERE user_id =" . $user->data['user_id'];  
$result = $db->sql_query($avvy);  
  
while($row = mysqli_fetch_array($result))  
{  
$link = $row['user_avatar'];  
$width = 80;  
$height = 80;  
}?>   
                  <A  
                  href="<?php echo $phpbb_url_path?>memberlist.php?mode=viewprofile&amp;u=<?php echo $user->data['user_id'];?> "  
                  target=_self></A><FONT face=Arial size=2> 
                  <TABLE cellSpacing=0 cellPadding=0 width=300 background=""  
                  border=0> 
                    <TBODY> 
                    <TR> 
                      <TD vAlign=top width=150 background=""> 
                                                <CENTER>Hola <a href="<?php echo $phpbb_url_path?>memberlist.php?mode=viewprofile&amp;u=<?php echo $user->data['user_id'];?> " target="_self"> <?php echo $user->data['username'];?> </A>!  
<IMG height=" <? echo $height?>" alt=Avatar  
                        src="<?php echo $phpbb_url_path?>download/file.php?avatar=<? echo $link?> "  
                        width="<? echo $width?> " border=0> </CENTER></TD> 
                      <TD vAlign=top width=150 background=""> 
                        <LI><A href="<?php echo $phpbb_url_path?>ucp.php">Panel  
                        de Control</A> <BR> 
                        <LI><?php echo( "<a href=" . $phpbb_url_path . 'ucp.php?mode=logout&redirect=index.php' . '&sid=' . $user->data['session_id'] . " >Cerrar Sesion</a>");?>  
                  </LI></TD></TR></TBODY></TABLE></FONT><?php  
} else {  
 ?> 
                  <TABLE cellSpacing=0 cellPadding=0 width=145 border=0> 
                    <TBODY> 
                    <TR> 
                      <TD vAlign=top align=middle width=145> 
                        <P> 
                        <FORM  
                        action="<?php echo $phpbb_url_path?>ucp.php?mode=login"  
                        method=post target=_top encType=multipart/form-data> 
                        <META content="MSHTML 6.00.2800.1106" name=GENERATOR> 
                        <TABLE cellSpacing=0 cellPadding=0 width=280  
                        background="" border=0> 
                          <TBODY> 
                          <TR> 
                            <TD vAlign=top width=140 background=""> 
                              <CENTER><IMG height=75 alt=. hspace=0  
                              src="http://poderinterno.net63.net/avatar.jpg"  
                              width=75 border=1><BR><FONT face=Arial size=1><A  
                              title="L�ete las condiciones y decide si quieres pertenecer a esta comunidad."  
                              href="<?php echo $phpbb_url_path?>ucp.php?mode=register">Registrarse</A></FONT></CENTER></TD> 
                            <TD vAlign=top width=140 background=""><FONT  
                              face=Arial size=1>Usuario: <INPUT  
                              style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; WIDTH: 110px; BORDER-BOTTOM: 0px"  
                              size=10 name=username> <BR>Contrase�a:<BR><INPUT  
                              style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; WIDTH: 110px; BORDER-BOTTOM: 0px"  
                              type=password maxLength=32 size=10 name=password>  
                              <BR><INPUT class=checkbox id=autologin  
                              type=checkbox value=ON name=autologin> Autologin  
                              <INPUT type=hidden value=../redirigir.php  
                              name=redirect> <INPUT style="BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; WIDTH: 60px; BORDER-BOTTOM: 0px" type=submit value=" Entrar " name=login>  
                              </FONT></TD></TR></TBODY></TABLE></FORM></P></TD></TR></TBODY></TABLE><?php }  
?></P></TD></TR>