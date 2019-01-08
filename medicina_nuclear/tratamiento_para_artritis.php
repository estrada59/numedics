<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Medicina Nuclear - NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php   include "../includes/java_script_2.php"; 
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
					<?php	
							include "../includes/slide_carusel.php";
							//************ Para establecer carusel primero URL de la imagen y Texto si así lo desea.
							$lista = array(
    							0  => array("imagenes/slide_principal/artritis.jpg",		"" ),
    							1  => array("imagenes/slide_principal/CA_mama.jpg",		"" ),
    							2  => array("imagenes/slide_principal/Infarto.jpg",		"" ),
    							3  => array("imagenes/slide_principal/slide_gammagrama_oseo.jpg",		"" ),
    							4  => array("imagenes/slide_principal/slide_camilla.jpg",		"" ),
    							5  => array("imagenes/slide_principal/SPECT_CEREBRAL.jpg",		"" )
    							);	
							
							$t=carusel($lista);
					?>

					<div class="title"><h2>La medicina nuclear como recurso terapéutico</h2></div>
						<p align="justify">  La Medicina Nuclear es reconocida como un efectivo recurso terapéutico en 
						Europa y Canadá, donde sus aplicaciones han tenido una excelente aceptación, sobre todo en 
						casos de hipertiroidismo (tratado con I-131), linfoma no Hodkin ( con Zevamab Y90) así como
						paleativo del dolor óseo, etc.</p>

						<p align="justify">  Cabe mencionar que en Europa se realizan con éxito más de 7,000 tratamientos con 
						Y-90, Er-169 y Sm-153 al año.</p>


						<div class="video-shortcode video8">
							<!--<iframe src="tratamiento_artritis/index.html" ></iframe>-->
							<iframe src="tratamiento_para_la_artritis/index.html" ></iframe>
						</div>
					<div class="title"><h2>Descargue el tríptico <a href="Tratamiento_para_la_artritis.pdf" target="_blank">aquí:</a></h2></div>

					<div class="title"><h2>Técnicas de diagnóstico:</h2></div>
					<p align="justify">Este procedimiento es aplicado por médicos especialmente con más de 25 años
					de experiencia, con entrenamiento en Estados Unidos en este ramo de la medicina nuclear aplicada
					a la reumatología. El equipo multidisciplinario está compuesto por médico ortopedista y médico reumatólogo
					apoyados por enfermeras especializadas y fisoterapeutas.
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