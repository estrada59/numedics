<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama pulmonar ventilatorio) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama pulmonar ventilatorio y perfusorio.</h2></div>
						
						<p align="justify">La gammagrafía pulmonar es una técnica utilizada en medicina nuclear
						basada en la administración de un radiofármaco.</p>
						<p align="justify">Las técnicas de medicina nuclear, además de conseguir imágenes de la
						morfología de los órganos, proporcionan imágenes del funcionamiento y el metabolismo de 
						los mismos.</p>
						<p align="justify">La gammagrafía pulmonar se realiza de dos formas con radiofármacos 
						inhalado o inyectado para visualizar el espacio pulmonar donde se hace el intercambio 
						de gases (ventilación) y la circulación sanguínea del tejido parénquima (perfusión) 
						en todos los segmentos de los pulmones.</p>
						<p align="justify">En patología respiratoria se utilizan dos tipos de gammagrafías:</p>

						<div class="title"><h2>Gammagrafía de perfusión:</h2></div>
						<p align="justify">Utiliza sustancias inyectadas por vía intravenosa (generalmente la
						albúmina) marcadas con radioisótopos como el Tc99m procediéndose después al registro
						del lecho vascular pulmonar. El gammagrama pulmonar de perfusión nos permite estudiar 
						la vascularización pulmonar y, por tanto, su indicación preferente será el tromboembolismo
						pulmonar y otras las enfermedades vasculares.</p>
						<div class="title"><h2>Gammagrafía de ventilación:</h2></div>
						<p align="justify">Se realiza haciendo inhalar al paciente aire marcado con radioisótopos
						como Tc99m-DTPA. Inmediatamente después, se registra mediante una gammacámara la imagen
						de la distribución pulmonar del radiofármaco inhalado. El gammagrama pulmonar de ventilación
						nos permite el estudio de la distribución de la ventilación y, por consiguiente, estará indicada
						especialmente en casos de atelectasias y otras enfermedades.</p
>				</div>
				
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