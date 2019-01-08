<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Tomografía (Quiénes somos)- NUMEDICS</title>
	
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
							Tomografos especializados fue inaugurado en Tuxtla Gutiérrez el 05 de Julio
							de 2014. 
						</p>
						
					
					<div class="row">
						<div class="span8">
							
							<blockquote>
								<p> <strong>Visión</strong></p>
								<p align="justify">Ser el gabinete de diagnostico de alta especialidad en el 
								estado de Chiapas con la mejor atención y calidad de servicio a sus clientes; con
						 		tecnología de punta y ser un centro de referencia en el sureste de México.</p>
							</blockquote>
						</div>
					</div>
					<div class="row">
						<div class="span4">
							<blockquote>
								<p> <strong>Misión</strong></p>
								<p align="justify">Brindar servicios de diagnósticos con la mejor atención y calidez</p>
							</blockquote>		
						</div>
						<div class="span4">
							<blockquote>
								<p> <strong>Objetivo</strong></p>
								<p align="justify">Proporcionar servicios de gabinete de Tomografía a los diversos sectores públicos
								y privados del estado de Chiapas</p>
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