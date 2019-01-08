<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Medicina Nuclear (Gammagrama SPECT cardíaco) - NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php include "../includes/java_script_2.php"; ?>
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
					<div class="title"><h2>Gammagrama SPECT cardiaco</h2></div>
						<p><strong>ENFERMEDAD ARTERIAL CORONARIA</strong></p>
					
						<p align="justify">En México las enfermedades del corazón fueron la primera 
						causa de mortalidad general en el año 2003. El infarto agudo del miocardio
						contribuyó con el 80% del total de defunciones en ese grupo y con el 8% del
						total de las muertes ocurridas en el país.</p>
						<p align="justify">Dentro de los factores de riesgo asociados a la enfermedad
						isquémica cardiaca destacan:</p>
						<ul class="check-list">
							<li>Sedentarismo.</li>
							<li>Elconsumo de tabaco.</li>
							<li>El sobrepeso.</li>
							<li>La hipertensión arterial.</li>
							<li>Cifras altas de colesterol, triglicéridos y ácido úrico.</li>
							<li>La presencia de Diabetes Mellitus.</li>
							<li>Estrés (Tipo de personalidad).</li>
						</ul>
				
						
						<div class="row">
							<div class="span4">
							<iframe height="215" src="https://www.youtube.com/embed/qG_mwurDcqg" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="span4">
							<iframe height="215" src="https://www.youtube.com/embed/R6S_25F9ttQ" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>

						<div class="row">
							<div class="span4">
							<iframe height="215" src="https://www.youtube.com/embed/mKrUSdyRvFU" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="span4">
							<iframe height="215" src="https://www.youtube.com/embed/1BGfjiSrwD4" frameborder="0" allowfullscreen></iframe>	
							</div>
						</div>
						
						<p align="justify"><br> <br>
						Hasta hace poco se pensaba que era una enfermedad propia de ambientes urbanos
						y poblaciones de altos ingresos. Sin embargo, cada vez es más frecuente en
						áreas rurales del país.</p>

						<p align="justify">
						En México aunque el número de enfermos va en aumento, no es tan alto comparado
						con la mortalidad. Esto se debe a varias causas: por un lado está la falta de
						medidas preventivas (en la educación, Ia alimentación, el deporte, etc.) y
						por otro la detección tardía. La enfermedad se diagnostica tarde y por ende
						su letalidad es mayor.
						</p>

						<p align="justify">
						Afortunadamente Ia Medicina Nuclear cuenta con un estudio efectivo, seguro,
						confiable y no invasivo para la detección oportuna y evaluación de esta enfermedad:
						Ia gammagrafía de perfusión miocárdica.
						</p>
						<img src="imagenes/infarto_letrero.jpg"/>




						<div class="title"><h2></h2></div>
					
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