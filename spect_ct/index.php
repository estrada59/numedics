<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>SPECT-CT - NUMEDICS</title>
	
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
					
					<div class="title"><h2>¿Qué es el SPECT-CT?</h2></div>

						<p align="justify">EL SPECT-CT es cuando dos diferentes tipos de estudios, son tomados
						 por diferentes equipos o en ocasiones por uno sólo y las imágenes o 
						 fotos de cada uno de ellos se fusionan entre sí. Esta fusión puede proporcionar
						 información más precisa acerca de cómo funcionan las diferentes partes 
						 del cuerpo e  identificar problemas más claramente como por ejemplo tumores,
						 enfermedad de Alzheimer, etc.
						 </p>

						 <div class="title"><h2>¿Qué es el SPECT?</h2></div>

						 <p align="justify">El SPECT por sus siglas en inglés Tomografía Computada por Emisión de Fotón Único;
						 son imágenes que se obtienen después de la inyección de un radiofármaco que es usado
						 en los estudios de Medicina Nuclear. El radiofármaco se inyecta vía intravenosa y dependiendo
						 del tipo de radiofármaco y el tipo de análisis que se vaya a realizar podemos ver por
						 ejemplo: huesos, vías biliares, tiroides etc.
						 </p>

						 <p align="justify">El radiofármaco es detectado por una cámara especial (gamma cámara) que detecta
						  la radiación, la cual es emitida o liberada del cuerpo del paciente, e inmediatamente
						  se toman las imágenes o fotos para ver la función de algún órgano o cualquier otra parte
						  específica del cuerpo.
						  </p>

						  <a href="../medicina_nuclear/index.php" class="button medium s3">¿DUDAS? más información aquí</a>

						  <div class="title"><h2>¿Qué es el CT?</h2></div>

						  <p align="justify">Tomografía computada (CT) son imágenes que se obtienen mientras el paciente 
						  se recuesta en una camilla y ésta se mueve dentro de un anillo o dona, la máquina de Rayos X
						  gira alrededor del paciente tomando una serie de imágenes, las cuales posteriormente a través
						  de un programa se lleva a cabo una reconstrucción en tres dimensiones.
						  </p>

						  <div class="title"><h2></h2></div>
						  <p align="justify">La similitud entre el SPECT y el CT al momento de procesar las imágenes
						   permite que se puedan combinar o fusionar. La combinación de la información de un estudio
						   SPECT (Medicina Nuclear) y un estudio TC (tomografía computada, también conocida como TAC 
						   tomografía axial computada) permite, en un sólo estudio <strong>SPECT-CT</strong> ver al
						   mismo tiempo la función y estructura anatómica de un órgano o alguna parte especifica del
						   cuerpo al mismo tiempo.
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