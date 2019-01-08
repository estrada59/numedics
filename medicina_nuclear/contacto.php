<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Medicina Nuclear (Contácto)- NUMEDICS</title>
	
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
					

					<div class="title"><h2>Contácto</h2></div>
						<p align="justify"><strong>Horarios:</strong></p>
						
						<p align="justify">Lunes a viernes: 9:00 am - 2:00 pm y de 4:30 pm - 7:30 pm</p>
						<p align="justify">Sábados: 9:00 am - 1:00 pm</p>

						<p align="justify"><strong>Teléfonos:</strong></p>
						<p align="justify">(01)961 602 9211 y (01) 961 602 9479.</p>
						
						<p align="justify"><strong>Dirección:</strong></p>
						<p align="justify">Circunvalación pichucalco #216 Col. Moctezuma esq. 14 poniente norte.</p>

					<div class="row">
						<div class="span8">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4102945401855!2d-93.129302!3d16.756245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xacad21a720ee6e22!2sMedicina+Nuclear+de+Chiapas!5e0!3m2!1ses-419!2smx!4v1423121109673" width="600" height="450"  frameborder="0" style="border:0"></iframe>	
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