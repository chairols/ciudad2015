<?php
if($ok == '1') { ?>
<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        alert("Fuiste registrado exitosamente. Por favor corroborá tu casilla que te hemos enviado un correo electrónico con tus datos de acceso. Si no lo encontrás en tu bandeja de entrada, recordá chequear también las casillas de spam o correo no deseado.");
    });
</script>
<?php } ?>

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
    
	<!-- Scripts -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/assets/js/superfish.min.js" type="text/javascript"></script>
        <script src="/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
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
						<h2 class="pull-left">Ingresar</h2>
					</div>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section><!-- //BREADCRUMBS -->
				
				<!-- Our Vision -->
		  <section class="our_vision">
			<div class="row" data-animated="fadeIn">
            <p align="center"><em>Por favor, ingresá tus datos</em></p>
            <tr><form method="POST">
		    <td><div align="center">
                            <input name="usuario" type="text" required id="textfield" placeholder="Ingrese su usuario" autofocus>
		    </div></td>
		      </tr>
							  <tr>
							    <td>&nbsp;</td>
						      </tr>
							  <tr>
							    <td><div align="center"></div></td>
						      </tr>
                                                      
							  <tr>
							    <td><div align="center">
                                                                    <input name="password" type="password" required id="textfield2" placeholder="Ingrese su contraseña">
							    </div></td>
						      </tr>
							  <tr>
							    <td>&nbsp;</td>
						      </tr>
							  <tr>
							    <td><div align="center"></div></td>
						      </tr>
							  <tr>
							    <td><div align="center">
							      <button class="botonnoaprobar" name="button" type="submit" class="botonaprobar">INGRESAR</button>
							      </div></td>
						      </tr>
                                                      </form>
							  <tr>
							    <td>&nbsp;</td>
						      </tr>
							  <tr>
							    <td><div align="center"><strong><a href="/usuarios/recuperar/">Olvidé mi contraseña</a></strong></div></td>
						      </tr>
					    </table>
							<p class="h3">&nbsp;</p>
		    </div></section><!-- //Our Vision -->
				
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