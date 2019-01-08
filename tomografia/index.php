<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Tomografía - NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php   include "../includes/java_script_2.php"; 
			include_once "../analyticstracking.php";
	?>
	<link rel="stylesheet" href="../skins/red/red.css" id="colors" /> 

	<!--  Efecto slider  -->
	<link href="style.css"rel="stylesheet" type="text/css">
	
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

				
				
				<div class="span9">

					<?php	
							include "../includes/slide_carusel.php";
							//************ Para establecer carusel primero URL de la imagen y Texto si así lo desea.
							$lista = array(
    							0  => array("imagenes/slide_principal/artritis.jpg",		"" ),
    							1  => array("imagenes/slide_principal/CA_mama.jpg",		"" ),
    							2  => array("imagenes/slide_principal/Infarto.jpg",		"" ),
    							3  => array("imagenes/slide_principal/slide_gammagrama_oseo.jpg",		"" ),
    							4  => array("imagenes/slide_principal/slide_camilla.jpg",		"" )
    							);	
							
							$t=carusel($lista);
					?>
					
					<div class="title"><h2>¿Qué es la tomografía?</h2></div>

						<p align="justify">Es un estudio auxiliar de diagnostico, no invasivo,
						para la detección de multiples patologías, como cáncer, cambios inflamatorios,
						degenerativos, infecciones, fracturas, hematomas, trombosis, aneurismas, malformaciones 
						venosas, tumoraciones benignas, fracturas TCE.

						Utiliza energía radiante y un computador que convierte la información en imágenes
						para uso diagnostico.

						 </p>

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