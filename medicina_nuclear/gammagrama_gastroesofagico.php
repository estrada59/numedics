<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama gastroesofágico) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama gastroesofágico.</h2></div>
						
					

						<div class="title"><h2>Indicaciones:</h2></div>

						<p align="justify">Para el gammagrama de vaciamiento gástrico y reflujo 
						gastroesofágico se requiere de 4 horas de ayuno previo, en caso de u 
						adulto, abstenerse de fumar durante ese periodo.</p>

						<p align="justify">Para el estudio de vaciamiento gástrico, se recomienda 
						traer, comida sólida o líquida, para poder administrar el radiofármaco de Tc99m SC.</p>

						<p align="justify">Para un estudio de reflujo gastroesofágico, se le recomienda traer 
						líquidos (leche, jugo de naranja) para así poder administrar el radiofármaco de Tc99m SC.</p>


						<p align="justify">El tiempo de espera antes y durante el estudio se lo indicara el personal
						del centro cuando usted llegue a su cita.</p>


						<p align="justify">El fármaco y la realización del estudio no es dolorosa, ni provoca alguna
						reacción que pueda dañar su salud.</p>
							


						<div class="title"><h2>El gammagrama gastroesofágico está indicado para:</h2></div>

						<ul class="check-list">
							<li>Valoración de obstrucción de conductos salivales.</li>
							<li>Función de glándulas salivales.</li>
							<li>Valoración de reflujo gastroesofágico tanto pediátrico como en el adulto.</li>
							<li>Valoración de tránsito intestinal.</li>
							<li>Valoración de enfermedad intestinal crónica.</li>
							<li>Hepatitis.</li>
							<li>Valoración de daño hepático (cirrosis).</li>
							<li>Valoración de bazo, hiperesplénismo.</li>
							<li>Valoración de bazo accesorio post esplenectomía en purpura trombocitopenica.</li>
							<li>Valoración de trauma hepático y esplénico.</li>
							<li>Valoración de vías biliares.</li>
							<li>Diagnóstico de colecistitis aguda, crónica.</li>
							<li>Valoración del dolor residual post colecistectomía.</li>
							<li>Valoración de obstrucción biliar.</li>
							<li>Diagnóstico de hemangiomas.</li>
							<li>Valoración de fistulas biliares.</li>	
							<li>Diagnóstico de sangrado de tubo digestivo.</li>
							<li>Diagnóstico de divertículo de MECKEL.</li>
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