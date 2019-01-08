<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Medicina Nuclear (Quiénes somos)- NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php 	include "../includes/java_script_2.php"; 
			include_once "../analyticstracking.php";
	?>

	<link rel="stylesheet" href="../skins/red/red.css" id="colors" /> 

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
			 		
			 		<?php include_once "../includes/header_page.php"; ?>
			 	
			 	<!-- ***********  FIN encabezado de página  ************* -->

			</div>
			<div class="row">

				<!-- ***********        Menú principal      ************* -->	

					<?php include_once "../includes/menu_principal.php";
						$menu = sub_raiz();
					?>

				<!-- ***********        Menú principal      ************* -->	

			</div>	
		</div>
	  </div>
	</header>
    <section id="content" class="container-fluid">
    	<div class="container">
			<div class="row">
				
				<div class="span8">
					

					<div class="title"><h2>Quiénes somos</h2></div>
						<p align="justify">
							Medicina Nuclear de Chiapas fue inaugurado en Tuxtla Gutiérrez el 03 de marzo
							de 2003 por su fundador y propietario, el Dr. Jorge Luis Cisneros Encalada. 
							El Dr. Cisneros realizó la residencia de Medicina Nuclear en 1996 en el Hospital
							de Especialidades del Centro Médico Nacional Siglo XXI del IMSS. Fue el Presidente
							Fundador del Colegio de Medicina Nuclear de México A. C., y es el actual vocal
							social de la Federación Mexicana de Medicina Nuclear A. C. Además, fue anfitrión
							y organizador del XXXIX Congreso Nacional llevado a cabo del 4 al 7 de mayo de 2005
							en el Hotel Camino Real en Tuxtla Gutiérrez, Chiapas.
						</p>
						

					<div class="video-shortcode video8">
							<iframe src="https://www.youtube.com/embed/f5FxLyHBppQ" frameborder="0" allowfullscreen></iframe>
					</div>
					

					<div class="row">
						<div class="span8">
							
							<blockquote>
								<p> <strong>Visión</strong></p>
								<p align="justify">Ser el gabinete de Medicina Nuclear con la mejor atención y calidad de servicio a sus clientes; con
						 		tecnología de punta y ser un centro de referencia en el sureste de México.</p>
							</blockquote>
						</div>
					</div>
					<div class="row">
						<div class="span4">
							<blockquote>
								<p> <strong>Misión</strong></p>
								<p align="justify">Brindar servicios de diagnósticos y tratamiento en Medicina Nuclear con la mejor atención y calidez</p>
							</blockquote>		
						</div>
						<div class="span4">
							<blockquote>
								<p> <strong>Objetivo</strong></p>
								<p align="justify">Proporcionar servicios de gabinete de Medicina Nuclear a los diversos sectores públicos y privados del estado de Chiapas</p>
							</blockquote>
						</div>
					</div>	
					
					
					

					
				</div>

				<!--***************  inicio sidebar izq   ****************** -->
				<?php include "sidebar_izq.php"; ?>
				<!--***************  fin sidebar izq   ****************** -->

    		</div>
    		<!--<div class="title"><h2>Bienvenido a NUMEDICS</h2></div>-->
    	</div>
	</section>
	
<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "../includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>