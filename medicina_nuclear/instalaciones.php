<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Medicina Nuclear (instalaciones)- NUMEDICS</title>
	
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
					

					<div class="title"><h2>Instalaciones</h2></div>
						<p align="justify"> Infraestructura Medicina Nuclear</p>
						<p align="justify">La infraestructura con la que contamos en Medicina Nuclear de Chiapas,
						son las adecuadas para poder atender a la población chiapaneca; de manera cómoda y segura,
						de acuerdo a los lineamientos de la Comisión Nacional de Seguridad Nuclear y Salvaguardias
						(CNSNS) y permiso sanitario de la construcción Folio No. 007/13PSC  autorizado por COFEPRIS.</p>

					<?php	
							include "../includes/slide_carusel.php";
							//************ Para establecer carusel primero URL de la imagen y Texto si así lo desea.
							$lista = array(
    							0  => array("imagenes/slide_instalaciones/slide_gammacamara_consola.jpg",		"" ),
    							1  => array("imagenes/slide_instalaciones/slide_gammacamara_pasillo.jpg",		"" ),
    							2  => array("imagenes/slide_instalaciones/slide_gammacamara_sopha.jpg",		"" ),
    							3  => array("imagenes/slide_instalaciones/slide_gammacamara_sopha2.jpg",		"" )
    							);	
							
							$t=carusel($lista);
					?>
					
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