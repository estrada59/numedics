<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Instalaciones - NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php include "includes/java_script.php"; 
			include_once "analyticstracking.php";
	?>
	<link rel="stylesheet" href="skins/red/red.css" id="colors" /> 

	<!-- ********** FIN  inicio script, link, y meta   ************** -->

</head>
<body>

<div id="wrapper">
	<header id="header" class="container-fluid">
	  <div class="header-bg">
		<div class="container">
			<div class="decoration dec-left visible-desktop"></div>
			<div class="decoration dec-right visible-desktop"></div>	  
			<div class="row">
				
				<!-- ***********  encabezado de página  ************* -->	
			 		
			 		<?php include_once "includes/header_page.php"; ?>
			 	
			 	<!-- ***********  FIN encabezado de página  ************* -->

			</div>
			<div class="row">

				<!-- ***********        Menú principal      ************* -->	

					<?php include_once "includes/menu_principal.php";
							$menu = raiz();
					?>

				<!-- ***********        Menú principal      ************* -->	

			</div>	
			
		</div>
	  </div>
	</header>

	<section id="content" class="container-fluid">
	
	<div class="container">
		
		<div id="headline-page">
			<h1>Nosotros</h1>
			<!--<div id="crumbs"><a href="index.html">Inicio</a> / <a href="about_us.html" class="active">Nosotros</a></div> -->
		</div>
		
		<div class="row">
			<div class="span12">
				<div class="title"><h2>Bienvenido a NUMEDICS</h2></div>
					<?php	
							include "includes/slide_carusel.php";
							//************ Para establecer carusel primero URL de la imagen y Texto si así lo desea.
							$lista = array(
    							0  => array("images/gallery/numedics.jpg",		"" ),
    							1  => array("images/gallery/numedics_2.jpg",		"" ),
    							//2  => array("images/gallery/37.jpg",		"" )
    							);	
							
							$t=carusel($lista);
					?>
			</div>	
        </div>

		<div align="center">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/k3xLTDzI8GE?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="row">	
			<p><h1>Nucleo Médico</h1></p>
			<div class="row">
				<div class="span4">
					<blockquote>
						<p> <strong>Visión</strong></p>
						<p align="justify">Ofrecer un conjunto de servicios especializados dirigidos a la solución
										 integral de todos los problemas inherentes a su salud.</p>
					</blockquote>
				</div>

				<div class="span4">
					<blockquote>
						<p> <strong>Misión</strong></p>
						<p align="justify">Brindar servicios de imagenología, radiología, laboratorio, urología, oftalmología y pediatría
								 con la mejor atención y calidez.</p>
					</blockquote>
				</div>
				<div class="span4">
					<blockquote>
						<p> <strong>Objetivo</strong></p>
						<p align="justify">Proporciona una servicio integral a los diversos sectores públicos y privados del estado de Chiapas.</p>
					</blockquote>
				</div>
			</div>
		</div>

		<div class="row">	
			<div class="span12">
				<p><strong><h1>Conoce nuestras instalaciones</h1></strong></p>			
				<iframe width="560" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?layer=c&amp;panoid=WvExQsoyNawAAAQZY5WdDg&amp;ie=UTF8&amp;source=embed&amp;output=svembed&amp;cbp=13%2C358.20745%2C%2C0%2C0"></iframe><div><small><a href="https://www.google.com/maps/views/u/0/" style="color:#0000FF; text-align:left">Views</a>: <a href="https://www.google.com/maps/views/u/0/view/107031594002225528081/gphoto/6113717612452582834" style="color:#0000FF; text-align:left">NUMEDICS</a> de <a href="https://www.google.com/maps/views/u/0/profile/107031594002225528081" style="color:#0000FF; text-align:left">Enrique Estrada</a></small></div>
			</div>
			
		</div>	
	</section>
	
</div>

<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>