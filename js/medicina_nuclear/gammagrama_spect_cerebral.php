<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Medicina Nuclear (Gammagrama SPECT cerebral) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama SPECT cerebral</h2></div>										
						<p align="justify">El SPECT cerebral investiga de forma no invasiva la
						perfusión cerebral. Constituye un método de evaluación funcional de gran
						utilidad en el estudio de los síndromes neurológicos o neuropsiquiátricos.</p>

						<p align="justify">Es un estudio accesible y proporciona imágenes 
						tomográficas representativas del flujo sanguíneo (indirectamente de la
						actividad neuronal) en las distintas regiones cerebrales.</p>

						<p align="justify">Se trata de una técnica complementaria a las de neuroimagen
						estructural (TAC, RM convencional) que permite en muchos casos ampliar la 
						información puramente anatómica que éstas ofrecen, siendo pues un instrumento
						útil para el diagnostico del paciente.</p>

						<div class="row">
							<div class="video-shortcode video7">
								<iframe  src="https://www.youtube.com/embed/mWGhXADtGpQ" frameborder="0" allowfullscreen></iframe>
						 	</div>
						</div>
						<div class="row">
							<div class="span7">
								<div class="title"><h2>Indicaciones:</h2></div>
								<ul align="justify" class="check-list" >
									<li align="justify">Evitar la ingesta de sustancias neuroactivas (cafeína, 
									alcohol, drogas etc.) en las 24 horas previas al estudio.
									Se le recomienda al paciente llegar a su cita desvelado ya
									que eso ayudara a la toma.</li>
									<li>La exploración se hará en una sala sin ruidos y con luz tenue.</li>
									<li>Se le administrará una solución y un radiofármaco (Tc99m-HMPAO o Tc99m-ECD) por vía intravenosa.</li>
									<li>El tiempo que tarda antes y durante el estudio es un promedio de 2 horas o según le indique el personal autorizado de realizarlo.</li>
									<li>El radiofármaco y el estudio no son dolorosos ni causan reacción alguna que pueda afectar a su salud.</li>
									<li>Favor de traer si cuenta con ellos estudios que se haya realizado y venir acompañado de un familiar.</li>
								</ul>
							</div>
						</div>
						
						<div class="title"><h2>EL SPECT CEREBRAL ESTA INDICADO PARA:</h2></div>
						
						<div class="row">
							<div class="span8">
								<blockquote>
									<p><strong>DEMENCIAS:</strong></p>
									<p align="justify">La demencia más estudiada con SPECT es la demencia tipo Alzheimer,
									los defectos temporoparietales posteriores son el signo distintivo
									de la enfermedad de Alzheimer, en las fases iniciales de la 
									enfermedad la lesión puede ser unilateral y está frecuentemente
									dirigida a la región temporal, a medida que aumenta el deterioro
									cognitivo se amplía la zona lesionada hasta abarcar el lóbulo parietal 
									y el hemisferio contralateral.</p>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="span8">
								<blockquote>
									<p><strong>EPILEPSIA:</strong></p>
									<p align="justify">La principal utilidad del SPECT es la detección del foco epileptógeno,
									en pacientes con crisis parciales complejas que cuando se inyecta en 
									plena crisis se objetiva una zona de hiperactividad.</p>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="span8">
								<blockquote>
									<p><strong>ENFERMEDAD CEREBROVASCULAR:</strong></p>
									<p align="justify">El SPECT cerebral practicados a las primeras 6 horas del accidente 
									isquémico cerebral presenta una mayor sensibilidad que la TAC y RM 
									en la detección de la región cerebral afectada.
									Además es la única técnica capaz de demostrar la isquemia cerebral
									en casos de accidente cerebral transitorio.</p>
								</blockquote>
							</div>
						</div>
						<div class="row">
							<div class="span8">
								<blockquote>
									<p><strong>PSIQUIATRÍA:</strong></p>
									<p align="justify">El SPECT permite detectar alteraciones funcionales en regiones
									 cerebrales anatómicamente conservadas, además se puede conocer cuál 
									 es la respuesta funcional de las distintas regiones cerebrales ante 
									 una estimulación concreta sea motora, sensorial o congnitiva.Permite 
									 valorar el tratamiento y su evolución lo cual es de gran apoyo al médico 
									 tratante para valorar la efectividad del manejo neuropsiquiatrico.</p>
									 <p>La entidad psiquiátrica más estudiada mediante SPECT es la 
									 esquizofrenia en la que se han descrito alteraciones a predominio 
									 frontal y temporal así como la incapacidad de respuesta del lóbulo 
									 frontal a la estimulación cognitiva.</p>
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