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
						<div class="pull-right top_phone">Bienvenido <?=$session['nombre']?> <?=$session['apellido']?><span class="color_white"><a href="/registro/"></a></span></div>
						
						
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
								<li class="first active"><a href="/fotos/votar/" title="">Votar</a></li>
								<li ><a href="/fotos/votadas/" title="">Fotos Votadas</a></li>
               				  <li></li>
                              <li><a href="/usuarios/logout/" title="">Salir</a></li>
                              

						  </ul>
						</div>
					</div><!-- //MENU -->
				</header><!-- //HEADER -->
				
				<!-- BREADCRUMBS -->
			  <section class="full_width breadcrumbs_block clearfix">
					<div class="breadcrumbs_content">
						<h2 class="pull-left">Votar </h2>
					</div>
					<div class="overlay"></div>
					<div class="overlay_black"></div>
				</section><!-- //BREADCRUMBS -->
				
				<!-- Portfolio Block -->
				<section id="projects">
				  <div class="fotovotar">
				    <div align="center">
                                        <?php if($foto['idfoto'] == 0) { ?>
                                        <p>No hay más fotos para votar</p>
                                        <?php } else { ?>
				      <p><img src="/upload/thumb/<?=$foto['foto']?>" alt="" width="850" height="534"/></p>
				      <p>
                                      <div align="center">
                                        <table border="0">
                                            <tr>
                                                <td>
                                                    <div id="s1g" style="float: left;">
                                                        <img src="/assets/images/star0.png">
                                                    </div>
                                                    <div id="s1a" style="display: none; float: left;">
                                                        <a href="/fotos/voto/<?=$foto['idfoto']?>/1/"><img src="/assets/images/star1.png"></a>
                                                    </div>
                                                    <div id="s2g" style="float: left;">
                                                        <img src="/assets/images/star0.png">
                                                    </div>
                                                    <div id="s2a" style="display: none; float: left;">
                                                        <a href="/fotos/voto/<?=$foto['idfoto']?>/2/"><img src="/assets/images/star1.png"></a>
                                                    </div>
                                                    <div id="s3g" style="float: left;">
                                                        <img src="/assets/images/star0.png">
                                                    </div>
                                                    <div id="s3a" style="display: none; float: left;">
                                                        <a href="/fotos/voto/<?=$foto['idfoto']?>/3/"><img src="/assets/images/star1.png"></a>
                                                    </div>
                                                    <div id="s4g" style="float: left;">
                                                        <img src="/assets/images/star0.png">
                                                    </div>
                                                    <div id="s4a" style="display: none; float: left;">
                                                        <a href="/fotos/voto/<?=$foto['idfoto']?>/4/"><img src="/assets/images/star1.png"></a>
                                                    </div>
                                                    <div id="s5g" style="float: left;">
                                                        <img src="/assets/images/star0.png">
                                                    </div>
                                                    <div id="s5a" style="display: none; float: left;">
                                                        <a href="/fotos/voto/<?=$foto['idfoto']?>/5/"><img src="/assets/images/star1.png"></a>
                                                    </div>
                                                    <div style="float: left;">(</div> <div id="res" style="float: left;">0</div><div style="float: left;">)</div>

                                                </td>
                                            </tr>
                                        </table>
                
                                        </div></p>
                                        <?php } ?>
				    </div>
				  </div>
                </section>
				<!-- //Portfolio Block -->

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
<?php
$idfoto = 0;
if(count($fotos) > 0) {
    foreach ($fotos as $key => $value) {
        $idfoto = $value['idfoto'];
        break;
    }
}?>
<script type="text/javascript">
    $(document).ready(function() {
        
        $("#s1a").mouseover(function() {
            $("#s1g").mouseover();
        });
        $("#s1g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2a").hide();
            $("#s2g").show();
            $("#s3a").hide();
            $("#s3g").show();
            $("#s4a").hide();
            $("#s4g").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("1");
        });
        
        $("#s2a").mouseover(function() {
            $("#s2g").mouseover();
        });
        $("#s2g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3a").hide();
            $("#s3g").show();
            $("#s4a").hide();
            $("#s4g").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("2");
        });
        
        $("#s3a").mouseover(function() {
            $("#s3g").mouseover();
        });
        $("#s3g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4a").hide();
            $("#s4g").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("3");
        });
        
        $("#s4a").mouseover(function() {
            $("#s4g").mouseover();
        });
        $("#s4g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5a").hide();
            $("#s5g").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("4");
        });
        
        $("#s5a").mouseover(function() {
            $("#s5g").mouseover();
        });
        $("#s5g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6a").hide();
            $("#s6g").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("5");
        });
        
        $("#s6a").mouseover(function() {
            $("#s6g").mouseover();
        });
        $("#s6g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7a").hide();
            $("#s7g").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("6");
        });
        
        $("#s7a").mouseover(function() {
            $("#s7g").mouseover();
        });
        $("#s7g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8a").hide();
            $("#s8g").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("7");
        });
        
        $("#s8a").mouseover(function() {
            $("#s8g").mouseover();
        });
        $("#s8g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8g").hide();
            $("#s8a").show();
            $("#s9a").hide();
            $("#s9g").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("8");
        });
        
        $("#s9a").mouseover(function() {
            $("#s9g").mouseover();
        });
        $("#s9g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8g").hide();
            $("#s8a").show();
            $("#s9g").hide();
            $("#s9a").show();
            $("#s10a").hide();
            $("#s10g").show();
            $("#res").html("9");
        });
        
        $("#s10a").mouseover(function() {
            $("#s10g").mouseover();
        });
        $("#s10g").mouseover(function() {
            $("#s1g").hide();
            $("#s1a").show();
            $("#s2g").hide();
            $("#s2a").show();
            $("#s3g").hide();
            $("#s3a").show();
            $("#s4g").hide();
            $("#s4a").show();
            $("#s5g").hide();
            $("#s5a").show();
            $("#s6g").hide();
            $("#s6a").show();
            $("#s7g").hide();
            $("#s7a").show();
            $("#s8g").hide();
            $("#s8a").show();
            $("#s9g").hide();
            $("#s9a").show();
            $("#s10g").hide();
            $("#s10a").show();
            $("#res").html("10");
        });
    });
</script>