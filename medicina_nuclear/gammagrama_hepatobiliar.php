<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama hepatobiliar) - NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php include "../includes/java_script_2.php"; 
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
					<div class="title"><h2>Gammagrama hepatobiliar</h2></div>
						
						<p align="justify">Este tipo de gammagrafía tiene como objetivo evaluar la morfología
						y funcionalidad del hígado y las vías biliares. Para realizar este estudio el paciente 
						debe presentarse al procedimiento en ayuno de 4 a 6 horas como máximo.</p>


						<div class="video-shortcode video8">
							<iframe src="https://www.youtube.com/embed/uL1-lHy_RHA" frameborder="0" allowfullscreen></iframe>
						</div>

						<p align="justify">Para realizar este estudio diagnóstico se coloca al paciente en la
						camilla de la gammacámara y se administra el radiofármaco en una vena periférica
						iniciando las imágenes inmediatamente a la inyección.</p>

						<p align="justify">El estudio tiene una duración de una hora donde se adquieren imágenes
						continuas, al término de esta fase, se cuantifica la fracción de expulsión de la vesícula
						biliar, si en este momento la cinética del radiofármaco es normal, se da por concluido
						el estudio, sin embargo, si la vesícula tiene un vaciamiento escaso o por debajo de
						los valores normales, se envía al paciente a tomar algún alimento graso y se hace 
						una imagen más para evaluar la estimulación del alimento graso sobre la funcionalidad de 
						la vesícula y se cuantifica nuevamente la fracción de expulsión para hacer un comparativo
						con la fracción obtenida a los 60 minutos.</p>

						<p align="justify">El riesgo de experimentar efectos secundarios al estudio es muy bajo,
						habitaulmente el paciente puede regresar a sus actividades cotidianas sin llevar ningún
						cuidado adicional.</p>

						<p align="justify">En el caso donde el objetivo del estudio es descartar la atresia o
						agenesia de los conductos biliares, cuando el radiofármaco no presenta movlización hacia
						intestino, es necesario hacer una imagen de 24 horas posteriores al inicio del procedimiento,
						con la intención de obtener información adicional sobre el diagnostico presuntivo.</p>
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