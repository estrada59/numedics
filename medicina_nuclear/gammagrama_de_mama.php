<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama de mama) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama de mama</h2></div>
						
						<p align="justify">El gammagrama de mama esta indicada para diversas enfermedades como:</p>

						<ul class="check-list">
							<li>Estudio del cáncer de mama: ( sensibilidad 88% especificidad (100%) no doloroso, sin contraindicaciones.</li>
							<li>Diagnóstico de cáncer de mama.</li>
							<li>Valoración de extensión o cáncer de mama multicéntrico.</li>
							<li>Valoración de cáncer de mama en pacientes con implantes.</li>
							<li>Valoración de efectividad de quimioterapia en pacientes con cáncer de mama.</li>
							<li>Valoración del ganglio centinela, para evitar vaciamientos axilares innecesarios. </li>
						</ul>
						<div class="title"><h2>Indicaciones:</h2></div>

						<p align="justify">No es necesaria ninguna preparación, aunque se le recomienda hacer
						la exploración en la segunda semana del ciclo menstrual y es conveniente no realizar 
						el estudio antes de la primera semana de haber realizado una punción (biopsia). Se le
						aplicará un radiofármaco vía intravenosa (radiofármaco) Tc99m-MIBI.</p>

						<p align="justify"><strong>Tiempo que tarda en realizarse el estudio:</strong></p>

						<p align="justify">El tiempo de espera antes y durante la realización del estudio es
						de una hora en promedio o según le indique el personal del centro.</p>

						<p align="justify">El radiofármaco y la realización del estudio no es dolorosa, ni 
						provoca alguna reacción que pueda dañar su salud. Favor de traer si cuenta con ellos 
						estudios que se haya realizado y venir acompañado de un familiar. </p>

						<div class="row">
							<div class="spam8">
								<img width="650" src="imagenes/Cartel_ca_mama.jpg"/>		
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