<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama renal) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama renal</h2></div>
						
						<p align="justify">Es un estudio de medicina nuclear no invasivo en la que en base
						 a la concentración de radiotrazadores o radiofármacos evalúan predominantemente el
						  aspecto funcional dinámico de los riñones el cual permite conjuntamente realizar
						   un análisis cuantitativo de los riñones en forma conjunta y/o por separado.</p>

						
						<p align="justify">La gammagrafía renal se realiza principalmente en tres estudios
						 que proporcionan información diferente, dependiendo del diagnóstico presuntivo, 
						 el proceso patológico  y la edad del paciente, el médico tratante deberá señalar
						  claramente en la orden del estudio la información que necesita.</p>

						<p align="justify">Dentro de los radiotrazadores habitualmente más utilizados 
						tenemos a los marcados con tecnecio como el 99mTc-DTPA, 99mTc-MAG3 y 99mTc-DMSA
						 su selección depende del tipo de información que se necesita</p>

						 <div class="video-shortcode video8">
							<iframe  src="https://www.youtube.com/embed/FpZ_fGNtR2A" frameborder="0" allowfullscreen></iframe>
						</div>

						<p align="justify"><strong>1.- MAG3:</strong></p>
						<p align="justify">Es básicamente secretado a nivel tubular. Es el fármaco de 
						elección en los estudios renales dinámicos, dada su mayor tasa de extracción 
						renal y por ende tener un patrón más fisiológico que el DTPA.</p>

						<p align="justify">
							Es importante su uso especialmente:	
						</p>

						<ul class="minus-list">
							<li>Niños menores de 1 año.</li>
							<li>Pacientes transplantados renales.</li>
							<li>Pacientes con algún grado de Insuficiencia renal.</li>
							<li>Evaluación de HTA renovascular.</li>
						</ul>

						<p align="justify"><strong>2.- DTPA:</strong></p>
						<p align="justify">Es filtrado a nivel glomerular. Hoy en día es una alternativa
						al uso del MAG3, sólo utilizado dado su menor costo, aunque con la limitante de
						menor extracción, lo que puede determinar falsos positivos, para algunos casos
						como estenosis Pieloureteral o NTA falsamente aumentada en riñones transplantados.</p>

						<p align="justify">En el caso de hipertensión renovascular   se puede realizar la
						 prueba farmacológica con captopril o furosemide para evaluar la respuesta de las
						  arterias renales o las entidades obstructivas respectivamente.</p>

						<p align="justify"><strong>3.- DMSA</strong></p>
						<p align="justify">Permite evaluar forma, tamaño y situación renal, si bien la 
						ecografía es mejor para estos parámetros; permite evaluar el parénquima renal
						funcionante mediante el cálculo de la función renal relativa; y permite detectar
						lesiones corticales en PNA, que es su gran indicación, tanto en pielonefritis aguda 
						como cicatrices renales.</p>

						<p align="justify">La función renal relativa, o función renal por separado, se
						obtiene mediante la división de la actividad de cada riñón por separado, medida
						durante la segunda fase, por la suma de la actividad de ambos.</p>

						<p align="justify"><strong>Indicaciones:</strong></p>
						
						<ul class="check-list">
							<li>No es necesario ayuno.</li>
							<li>Tomar de 3 a 4 vasos de agua o jugo 15 minutos antes de iniciar el estudio.</li>
							<li>Debe orinar antes de iniciar el estudio.</li>
							<li>Será necesario suspender medicamentos vasopresores en caso de que su estudio este
							 indicado para el diagnostico de hipertensión renovascular.</li>
							<li>Para la realización del gammagrama renal se requiere la administración intravenosa
							de una pequeña cantidad de una sustancia radiactiva llamada radiotrazador. El tejido
							renal habitualmente concentra la sustancia radiactiva lo cual es detectado en un equipo
							especial llamado gammacamara.En este estudio se evalúa la llegada del radiotrazador
							hacia cada uno de los riñones (fase de perfusión), la capacidad de captación del radiotrazador 
							y excreción renal.</li>
							<li>En el caso del gammagrama con DMSA se le administrara el radiofármaco o radiotrazador
							y posteriormente a las 4 o 5 horas se le hará la toma de imágenes dinámicas.</li>
						</ul>

						
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