<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5&appId=311736872283357";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <li><a href="index">Noticias</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Juego<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="clases">Clases</a></li>
                            <li><a href="jcj">JcJ</a></li>
                            <li role="separator" class="divider"></li>
							<li><a href="elementos">Elementos</a></li>
							<li><a href="tablasEXP">Tablas de EXP</a></li>
                            <li role="separator" class="divider"></li>
							<li><a href="mapamundi">Mapa mundi</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Base de datos<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="monstruos">Monstruos</a></li>
							<li><a href="objetos">Objetos</a></li>
							<li role="separator" class="divider"></li>
                            <li><a href="atributos">Atributos</a></li>							
							<li><a href="habilidades">Habilidades</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="mapas">Mapas</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herramientas <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="simulacion">Simulador de Personaje</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="descargas">Descargas</a></li>
                            <li role="separator" class="divider"></li>
							<li><a href="retransmisiones">Retransmisiones</a></li>
							<li><a href="multiretransmision">Multi Twitch</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="bso">BSO</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comunidad<span class="caret"></span></a>
						<ul class="dropdown-menu">
                           <li><a href="http://www.tosbase.es/foro">Foro</a></li>
					<li><a href="http://wiki.tosbase.es/">Wiki</a></li>
                     <li role="separator" class="divider"></li>
							<li><a href="chat">Chat</a></li>
                            <li role="separator" class="divider"></li>
							<li><a href="#">Clanes</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Otros<span class="caret"></span></a>
						<ul class="dropdown-menu">                     
							<li><a href="#">Estado de los servidores</a></li>
						</ul>
					</li>
					<?php if($user->data['is_registered'] && $typeuser==3){ ?>
			 <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="admNoticias">Añadir Noticia</a></li>
						<li role="separator" class="divider"></li>
							<li><a href="admClases">Añadir Clase</a></li>
							<li><a href="admMonstruo">Añadir Monstruo</a></li>
							<li><a href="admObjetos">Añadir Objeto</a></li>
							<li><a href="admMapas">Añadir Mapa</a></li>
							<li><a href="admAtributo">Añadir Atributo</a></li>
							<li><a href="admHabilidad">Añadir Habilidad</a></li>
							
							
						</ul>
					</li>
					<?php	}  ?>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php if($user->data['is_registered']){
			 ?>
				<li><IMG height="50px" alt=Avatar src="<?php echo $phpbb_url_path?>download/file.php?avatar=<? echo $link?>" width="50px" border=0><li/>
				<li><a href="<?php echo $phpbb_url_path?>ucp.php"> <?php echo $username ?></a></li>
				<li><?php echo( "<a href=" . $phpbb_url_path . 'ucp.php?mode=logout&redirect="../index.php"' . '&sid=' . $user->data['session_id'] . " >Cerrar Sesion</a>");?> </li>
				<?php }else{ ?>
				<li><a href="<?php echo $phpbb_url_path?>ucp.php?mode=register"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
    		 <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>";
				<?php	}  ?>
     
    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>