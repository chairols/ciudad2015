<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>XVI Concurso fotográfico | GENTE DE MI CIUDAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
    
	<!-- CSS STYLES -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/flexslider.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/animate.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/estilos.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/colors/" rel="stylesheet" type="text/css" id="colors" />
    
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
						<div class="pull-right top_phone"><a href="/usuarios/login/">Bienvenido <?=$session['nombre']?> <?=$session['apellido']?></a> (<a href="/usuarios/logout/"> Salir </a>)</div>
						
						
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
						<h2 class="pull-left">Subí tus fotografías</h2>
					</div>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section><!-- //BREADCRUMBS -->
				
				<!-- Our Vision -->
				<section class="our_vision">
					<div class="row" data-animated="fadeIn">
                                            <?php if(count($fotos) < 2) { ?>
					  <div >
                        <form method="POST" enctype="multipart/form-data">
                        <p><strong>Podes subir hasta 2 fotografías</strong><br>
                          <br>
                              Seleccionar fotografía: 
                              <input type="file" name="foto" id="fileField" required>
                          <br>
                          <br>
                        </p>
                        <p>Titulo de la foto: 
                          <input type="text" name="nombre" id="textfield" class="campoformulario" required>
                          <br>
                          <br>
                        </p>
                        <p>
                          <input type="submit" name="submit" id="submit" value="Subir" class="botonnoaprobar">
                        </p>
                        </form>
                                          </div>
                                            <?php } else { ?>
                                            <p><strong>Usted cargó las 2 fotos existosamente. Para finalizar la inscripción haga click <a href="/usuarios/logout/" class="textoazul">aquí</a></strong></p>
                                            <?php } ?>
			    </div>
                <div class="row" data-animated="fadeIn">
					  <div >
                        <p class="textotabla"><strong>Tus fotos participantes son:</strong>                        </p>
                        <table class="textotabla" width="100%" border="0">
                          <tbody>
                              <tr>
                              <?php foreach($fotos as $foto) { ?>
                                <td width="50%"><strong><img src="/upload/thumb/<?=$foto['foto']?>" alt="<?=$foto['nombre']?>" width="350" height="252"></strong></td>
                              <?php } ?>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                  <?php foreach($fotos as $foto) { ?>
                                  <td><strong>Titulo:</strong> <?=$foto['nombre']?></td>
                                  <?php } ?>
                                </tr>
                                <tr>
                                    <?php foreach($fotos as $foto) { ?>
                                    <td><strong>Número de participación</strong>:
<?=$foto['idfoto']?></td>
                                    <?php } ?>
                            </tr>
                          </tbody>
                        </table>
                        <p>&nbsp;</p>
					  </div>
			    </div>
                </section><!-- //Our Vision -->
				
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#boton").click(function() {
            $("#subiendo").show();
        });
        
        $("#bot").click(function() {
            if(confirm("Estás seguro que querés subir está foto? Una vez cargada no podrá ser reemplazada.")) {
                $("#boton").click();
            }
        });
    });
</script>
<?php if(count($fotos) == 2) { ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#texto1").hide();
        $("#texto2").show();
    });
</script>
<?php } ?>
<?php
if($exitoso == '1') { ?>
<script type="text/javascript">
    $(document).ready(function() {
        alert("Su foto ha sido cargada exitosamente");
    });
</script>
<?php } ?>