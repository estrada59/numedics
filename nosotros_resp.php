<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Acerca de nosotros - NUMEDICS</title>
	
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
		<div class="row">	
			<div class="span12">
				<p><strong><h1>NUMEDICS</h1></strong></p>
				<p><h3>Nucleo Médico</h3></p>
				<p>	Ofrece un conjunto de servicios especializados dirigidos a la solución integral de todos 
					los problemas inherentes a su salud. Ponemos a su disposición, una amplia gama de 
					Especialidades médicas.
				</p>
			</div>
		</div>	
	</section>
	
</div>

<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>