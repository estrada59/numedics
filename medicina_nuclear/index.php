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

					<div class="title"><h2>¿Qué es la medicina nuclear?</h2></div>
						<p align="justify">  La Medicina Nuclear es un método auxiliar de diagnóstico, 
						el cual se basa en el uso de isótopos radiactivos de vida media corta, los cuales
						son monitoreados dentro de cualquier sistema orgánico, mediante el uso de detectores
						de centelleo acoplados a un sistema moderno de computo, denominado Cámara de Anger
						o Gammacámara.</p>


						<div class="video-shortcode video8">
							<iframe src="https://www.youtube.com/embed/f5FxLyHBppQ" frameborder="0" allowfullscreen></iframe>
						</div>

					<div class="title"><h2>Técnicas de diagnóstico:</h2></div>
					<p align="justify">Son técnicas no invasivas ya que para su realización, únicamente precisan
					de la administración previa al paciente, generalmente por vía intravenosa, de un radionúclido
					o radiofármaco.Una vez que el radiofármaco ingresa al interior del organismo se fija en un tejido,
					órgano o sistema determinado y puede realizarse su seguimiento desde el exterior, debido a que
					emite una pequeña cantidad de radiación gamma que es detectada por equipo especializado llamados
					gammacámaras.

					Esta señal radiactiva emitida es amplificada y transformada en una señal eléctrica que posteriormente
					es analizada por una computadora y convertida en imágenes del órgano estudiado. La elección del tipo 
					de radiofármaco depende del tejido, órgano o sistema orgánico a estudiar.
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