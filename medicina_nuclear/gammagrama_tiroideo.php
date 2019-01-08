<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama Tiroideo) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama tiroideo.</h2></div>
						
						
						<div class="title"><h3>El gammagrama tiroideo esta indicado para:</h3></div>
						<ul class="check-list">
							<li>Diagnóstico diferencial entre hipertiroidismo y tiroiditis.</li>
							<li>Valoración de la glándula tiroides.</li>
							<li>Valoración de los nódulos tiroideos.</li>
							<li>Valoración de cáncer de tiroides.</li>
							<li>Tratamiento con yodo radiactivo para hipertiroidismo.</li>
							<li>Rastreo tiroideo post tiroidectomía por cáncer de tiroides.</li>
							<li>Dosis ablativa post cirugía por cáncer de tiroides.</li>
							<li>Tumores e hiperplasia de la corteza suprarrenal.</li>
							<li>Diagnóstico de tumores neuroendocrinos.</li>
							<li>Enteropancreáticos receptores de somatostatina.</li>
						</ul>
						<div class="row">
							<div class="span8">
								<img src="imagenes/gammagrama_tiroideo.jpg" width="600" />		
							</div>
						</div>
						

						<div class="title"><h2>Indicaciones:</h2></div>

						<p align="justify">Suprimir medicamentos que puedan interferir en la
						captación del radionúclido (eutirox, levotiroxina o tapazol) no es necesario
						ayuno previo, el radionúclido de Tc99m se administra por vía intravenosa, el
						tiempo de espera para realizar el estudio es de 20 a 30 minutos o dependiendo
						de la cantidad de pacientes que se encuentren, después de la aplicación del medicamento.</p>

						<div class="title"><h2>Tiempo que tarda en realizarse el estudio:</h2></div>

						<p align="justify">
						El estudio es relativamente rápido con duración de 30 minutos aproximadamente,
						no produce ningún dolor o reacciones secundarias.</p>


						<p align="justify">Mediante el estudio puede comprobarse el aumento del tamaño del tiroides
						(bocio) y/o visualizar la existencia de algún nódulo (bulto) en su interior.</p>

						<p align="justify">
						Otra forma de realizar el estudio es con yodo I- 131, (I-131) ya que es otro radionúclido
						que es administrado por vía oral, donde el estudio es más tardado, ya que su duración puede
						ser de 6 a 8 horas, donde usualmente la espera es de 24 horas. Las indicaciones son las 
						mismas con las del tecnecio (Tc99m).</p>
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