<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama hepatoesplenico) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama hepatoesplenico</h2></div>
						
						<p align="justify">La gammagrafía hepatoesplénica es el procedimiento 
						que se utiliza para demostrar la integridad del sistema retículoendotelial
						del hígado y el bazo (función).</p>

						<p align="justify">En la gammagrafía hepatoesplénica se valora la morfología, 
						tamaño y posición del hígado, así como la distribución del radiofármaco.</p>

						<div class="title"><h2>Indicaciones:</h2></div>

						<ul align="justify" class="check-list">
							<li>Se requiere de ayuno previo de 4 horas; se le recomienda al paciente, no
							realizarse días antes del estudio, radiografías o medios de contraste y si 
							lo hizo comunicar a el personal del centro.</li>
							<li>Para la toma del estudio se le aplica un radiofármaco (Tc99m-SC) por vía intravenosa.</li>
							<li>El tiempo de espera antes y durante el estudio se lo indicará el personal autorizado.</li>
							<li>El estudio y el radiofármaco no produce ningún dolor o reacciones secundarias, que puedan afectar su salud.</li>
							<li>Favor de traer otros estudios que se haya realizado y venir acompañado de un familiar.</li>
						</ul>

						<div class="title"><h2>EL GAMMAGRAMA HEPATOESPLENICO ESTA INDICADO PARA:</h2></div>

						<ul align="justify" class="check-list">
							<li>Determinación de la forma y tamaño de hígado y bazo.</li>
							<li>Sospecha de hiperplasia nodular del hígado, estas lesiones generalmente tienen captación normal o aumentada.</li>
							<li>Valoración de la función del sistema reticuloendotelial hepático en pacientes con sospecha de enfermedad hepática.</li>
							<li>En niños sirve para detectar asplenia o poliesplenia congénita.</li>
						</ul>

						<p align="justify">
							Cuando se emplean eritrocitos marcados se pueden detectar hemangiomas hepáticos mediante la técnica SPECT.
							Es posible realizar un gammagrama sólo de bazo empleando eritrocitos dañados o crenados.
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