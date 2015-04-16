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
        <script src="/assets/js/jquery.isotope.min.js" type="text/javascript"></script>
        <script src="/assets/js/sorting.js" type="text/javascript"></script>
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
						<div class="pull-right top_phone"><a href="/usuarios/login/">Bienvenido <?=$session['nombre']?> <?=$session['apellido']?></a><span class="color_white"><a href="/usuarios/registrar/"></a></span></div>
						
						
				  </div><!-- //TOP LINE -->
					
					<!-- MENU -->
					<div class="menu_block clearfix">
						
						<!-- LOGO -->
						<div class="logo">
							<a href="/home/" alt="">antarctic</a>
						</div><!-- LOGO -->
						
						<!-- RESPONSIVE BUTTON MENU -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="glyphicon glyphicon-align-justify"></span>
							</button>
						</div><!-- //RESPONSIVE BUTTON MENU -->
						
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav right">
								<li ><a href="/fotos/votar/" title="">Votar</a></li>
								<li class="first active"><a href="/fotos/votadas/" title="">Fotos Votadas</a></li>
               				  <li></li>
                              <li><a href="/usuarios/logout/" title="">Salir</a></li>
                              

						  </ul>
						</div>
					</div><!-- //MENU -->
				</header><!-- //HEADER -->
				
				<!-- BREADCRUMBS -->
				<section class="full_width breadcrumbs_block clearfix">
					<div class="breadcrumbs_content">
						<h2 class="pull-left">Fotos Votadas </h2>
					</div>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section><!-- //BREADCRUMBS -->
				
				<!-- Portfolio Block -->
				<section id="projects">
					<div class="row">
                                            <div class="portfolio_block columns4" data-animated="fadeIn">
						<?php foreach($votadas as $votada) { ?>
                                                <div class="element col-sm-3 category1 project padbot30">
                                                    <div class="hover_img">
                                                        <img src="/upload/<?=$votada['foto']['foto']?>" alt="<?=$votada['foto']['nombre']?>" />
                                                        <a class="zoom" href="/upload/<?=$votada['foto']['foto']?>" rel="prettyPhoto[portfolio1]"></a>
                                                    </div>
                                                    <div class="project_descr center">
                                                        <h4>
                                                            Puntaje otorgado: <?=$votada['puntaje']?>
                                                            <br>
                                                            <a href="/fotos/editar_puntaje/<?=$votada['foto']['idfoto']?>">
                                                                <input class="botonaprobar" type="submit" name="submit" id="submit" value="Cambiar Voto">
                                                            </a>
                                                            <br>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <?php } ?>
					  </div>
					</div>
				</section><!-- //Portfolio Block -->

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