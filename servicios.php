<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Servicios - NUMEDICS</title>
	
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
			<h1>Servicios</h1>
		</div>
		<div class="row">
			<div class="span12">		
				<div class="title"><h2>Nuestros Servicios:</h2></div>	
			</div>
		</div>	
		<div class="row">
			<div class="span8">		
				<div class="video-shortcode video8">
							
							<iframe width="640" height="360" src="https://www.youtube.com/embed/k3xLTDzI8GE?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="span4">		
				<p><strong>NUMEDICS</strong></p><p> La excelencia y calidez son la base de nuestros servicios; ofrecemos una extensa gama de especialidades, servicios y programas médicos diseñados para cubrir  sus necesidades de atención en salud.</p>
				<img src="images/gallery/191.jpg">
			</div>
		</div>			
		
		<div class="row">
			<div class="span12">
				<div class="row">
                   

<?php
	include "includes/servicios.php";
	$medicos = array(
    	0  => array("Dr. Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"medicina_nuclear/index.php",		"images/gallery/medicina_nuclear.jpg", 	"Medicina Nuclear" ),
    	1  => array("Dr. Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"spect_ct/index.php",				"images/gallery/spect_ct.jpg", 	"SPECT-CT" ),
    	2 => array("Dr. Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"medicina_nuclear/tratamiento_para_artritis.php",	"images/gallery/artritis.jpg",	"Tratamiento para la artritis" ),
    	3  => array("Dr. Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"prueba_esfuerzo/index.php",		"images/gallery/52.jpg", 	"Prueba de Esfuerzo" ),
    	4  => array("Dr. Adrian Estrada Campos",			"Médico Radiólogo",		"tomografia/index.php",	"images/gallery/43.jpg",    "Tomografía" ),
    	5  => array("Dr. Dorian Narcía Guizar",				"Urólogo",				"urologia/DorianNarcia.php",		"images/gallery/49.jpg",    "Urología" ),
    	6  => array("Dr. Adrian Estrada Campos",			"Médico Radiólogo",		"tomografia/AdrianRadiologo.php",	"images/gallery/45.jpg", 	"Rayos X" ),
    	7  => array("Dra. Elsy Fabiola Saldaña Lievano",	"Cirujano Oftalmólogo",	"oftalmologia/index.php",		"images/gallery/46.jpg", 	"Oftalmologia" ),
    	8  => array("",										"",						"",									"images/gallery/47.jpg", 	"Ecocardiografía" ),
    	9  => array("",										"",						"",									"images/gallery/48.jpg", 	"Holter" ),
    	10  => array("Dr. Alejandra Rojas Ramos",			"Pediatra Neonatóloga",	"pediatria/AlejandraRojas.php",	    "images/gallery/50.jpg",	"Pediatría" ),
    	11 => array("Dr. Adrian Estrada Campos",			"Médico Radiólogo",		"tomografia/AdrianRadiologo.php",	"images/gallery/04.jpg", 	"Ultrasonido" ),
    	
		"num_elementos"  => 3
    	);
		
		$t = slide_med_pag($medicos);
?>      
				</div>
			</div>
		</div>	
		
	</section>
</div>

<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>