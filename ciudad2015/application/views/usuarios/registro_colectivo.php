<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>XVI Concurso fotográfico | GENTE DE MI CIUDAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS STYLES -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/colors/" rel="stylesheet" type="text/css" id="colors" />
	<link href="/assets/css/estilos.css" rel="stylesheet" type="text/css" id="colors" />
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Trade+Winds' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body,td,th {
	font-family: "Open Sans", sans-serif;
	color: #090000;
}
    </style>
    
	<!-- Scripts -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/assets/js/jquery.twitter.js" type="text/javascript"></script>
	<script src="/assets/js/superfish.min.js" type="text/javascript"></script>
	<script src="/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="/assets/js/animate.js" type="text/javascript"></script>
	<script src="/assets/js/myscript.js" type="text/javascript"></script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="/assets/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
	
	<!-- PAGE -->
	<div id="page">
		
		<!-- CONTAINER -->
		<div class="container page_block">
			
			<!-- WRAPPER -->
			<div class="wrapper">
				
				<!-- HEADER -->
				<header>
					
										<!-- TOP LINE -->
					<div class="top_line clearfix">
						<div class="pull-right top_phone"><a href="/usuarios/login/">Ingresar</a> <span class="color_white"><a href="/usuarios/registrar/">Registrate</a></span></div>
						
						
					</div><!-- //TOP LINE -->
					
					<!-- MENU -->
					<div class="menu_block clearfix">
					  <!-- LOGO -->
					  <div class="logo"> <a href="/home/" alt="">antarctic</a> </div>
					  <!-- LOGO -->
					  <!-- RESPONSIVE BUTTON MENU -->
					  <div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="glyphicon glyphicon-align-justify"></span> </button>
				      </div>
					  <!-- //RESPONSIVE BUTTON MENU -->
					  <div class="navbar-collapse collapse">
					    <ul class="nav navbar-nav right">
					      <li ><a href="/home/" title="">Inicio</a></li>
					      <li><a href="/como-participar/" title="">Como participar?</a></li>
					      <li ><a href="/bases-y-condiciones/" title="">Bases y condiciones</a></li>
					      <li><a href="/jurado/" title="">Jurado</a></li>
					      <li ><a href="/premios/" title="">Premios</a></li>
				        </ul>
				      </div>
				  </div>
					<!-- //MENU -->
				</header><!-- //HEADER -->
				
				<!-- BREADCRUMBS -->
				<section class="full_width breadcrumbs_block clearfix">
					<div class="breadcrumbs_content">
						<h2 class="pull-left">Registrate como Colectivo de fotógrafos</h2>
					</div>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section><!-- //BREADCRUMBS -->
				
				<!-- Our Vision -->
		  <section class="our_vision">
                      
		    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="2" >
                        <form method="POST">
		      <tr>
		        <td colspan="3" ><p ><strong>Registrarse como:<a class="textoazul" href="/usuarios/registrar"> INIDIVIDUO</a> | <a class="textoazul"   href="/usuarios/registro_colectivo">COLECTIVO DE FOTÓGRAFOS</a></strong></p></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td width="158"><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Nombre </span></div></td>
		        <td width="12">&nbsp;</td>
		        <td width="429"><span class="form-group">
		          <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?=set_value('nombre')?>" required autofocus>
		          <?php echo substr(form_error('nombre'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Numero CUIT</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="text" class="form-control" name="numero_dni" placeholder="Numero DNI" value="<?=set_value('numero_dni')?>" required>
		          <?php echo substr(form_error('numero_dni'), 3); ?>
		          <?php if(isset($numero_dni)) echo $numero_dni; ?>
		          </span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Direccion</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?=set_value('direccion')?>" required>
		          <?php echo substr(form_error('direccion'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Ciudad</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="<?=set_value('ciudad')?>" required>
		          <?php echo substr(form_error('ciudad'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Codigo Postal</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal" value="<?=set_value('codigo_postal')?>" required>
		          <?php echo substr(form_error('codigo_postal'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Provincia</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="text" class="form-control" name="provincia" placeholder="Provincia" value="<?=set_value('provincia')?>" required>
		          <?php echo substr(form_error('provincia'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Email</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?=set_value('email')?>" required>
		          <?php echo substr(form_error('email'), 3); ?>
		          <?php if(isset($email)) echo $email; ?>
		          </span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Confirmar Email</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="email" class="form-control" name="email2" placeholder="Email" value="<?=set_value('email2')?>" required>
		          <?php echo substr(form_error('email2'), 3); ?>
		          <?php if(isset($email2)) echo $email2; ?>
		          </span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Telefono</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?=set_value('telefono')?>" required>
		          <?php echo substr(form_error('telefono'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
                  </span>
	            <div align="right" ><span class="form-group">Crear Usuario</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                
                                <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?=set_value('usuario')?>" required>
		          <?php echo substr(form_error('usuario'), 3); ?>
		          <?php if(isset($usuario)) echo $usuario; ?>
		          </span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
		          </span>
		          <div align="right" ><span class="form-group"> Crear Password</span></div></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
		          <?php echo substr(form_error('password'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label>
		          </span>
		          <div align="right" ><span class="form-group">Confirmar Password</span></div>
		          <span class="form-group">
		            </label>
	              </span></td>
		        <td>&nbsp;</td>
		        <td><span class="form-group">
                                <input type="password" class="form-control" name="passconf" placeholder="Password" required>
		          <?php echo substr(form_error('passconf'), 3); ?></span></td>
	          </tr>
		      <tr>
		        <td><span class="form-group">
		          <label> &nbsp; </label>
		          </span></td>
		        <td>&nbsp;</td>
		        <td><span >
                                <input type="checkbox" name="bases">
		          Acepto las bases y condiciones</span></td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
	          </tr>
		      <tr>
		        <td>&nbsp;</td>
		        <td>&nbsp;</td>
		        <td><button class="botonnoaprobar" type="submit" >Registrate</button></td>
	          </tr>
                  </form>
	        </table>
		  </section>
		  <!-- //Our Vision -->
				
				<!-- Our Mission --><!-- //Our Mission -->
				
				<!-- Our Team -->
			  <section class="padtop0 team_block"></section>
				<!-- //Our Team -->

				<!-- FOOTER -->
			  <footer class="full_width footer_block">
				  <!-- COPYRIGHT -->
				  <!-- //COPYRIGHT -->
				  <table width="100%" border="0">
				    <tbody>
				      <tr>
				        <td><img src="/assets/images/telefono.png" alt=""/></td>
				        <td><div align="right"><img src="/assets/images/redes.png" alt=""/></div></td>
			          </tr>
			        </tbody>
			      </table>
			  </footer>
				<!-- //FOOTER -->
			</div><!-- WRAPPER -->
		</div><!-- //CONTAINER -->
	</div><!-- //PAGE -->
</body>
</html>