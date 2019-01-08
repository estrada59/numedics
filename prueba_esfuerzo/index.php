<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Prueba de esfuerzo - NUMEDICS</title>
	
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
				

					<div class="title"><h2>Prueba de esfuerzo con ejercicio</h2></div>
						
						<p align="justify">Se utiliza para medir el efecto del ejercicio sobre el corazón.</p>

					
					<div class="title"><h2>Forma en que se realiza el examen</h2></div>
					
						<p align="justify">Este examen se hace en un centro médico o en el consultorio del médico.
							El técnico colocará 10 parches planos y adhesivos llamados electrodos en su pecho.
						 	Éstos se fijan a un monitor de ECG que sigue la actividad eléctrica del corazón durante el examen.
							Usted caminará en una cinta sin fin (caminador).
							<ul class="bullet-list">
								<li>Aproximadamente cada 3 minutos, le pedirán que camine más rápido.</li>
								<li>Usted también deberá caminar en un ángulo inclinado.
									Es como caminar rápido o trotar cuesta arriba.</li>
							</ul> 
							Mientras usted hace ejercicio, se mide la actividad del corazón con un electrocardiograma
						    (ECG) y también se toman lecturas de la presión arterial.
						</p>

						<p>El examen se continúa hasta que:
							<ul class="bullet-list">
								<li>Usted alcance una frecuencia cardiaca deseada.</li>
								<li>Usted desarrolle dolor torácico o un cambio en la presión arterial que sea preocupante.</li>
								<li>Los cambios en el ECG muestren que el miocardio no está recibiendo suficiente oxígeno.</li>
								<li>Su ritmo cardíaco cambie.</li>
								<li>Usted esté demasiado cansado o tenga otros síntomas, como dolor en la pierna, que le impidan continuar.</li>
							</ul> 
							A usted se le monitoreará durante 10 a 15 minutos después del ejercicio o hasta que su frecuencia cardíaca retorne
							a sus niveles iniciales. El tiempo total del examen es alrededor de 60 minutos.

						</p>

						<p>1.- Se solicita que no coma ni beba nada de 4 a 6 horas antes de la prueba.</p>
						<p>2.- Si es asmático o alérgico hágalo saber.</p>
						<p>3.- Realizar lo siguiente 48 horas antes del estudio:</p>
						<p>	
							
							<ul class="bullet-list">
								<li>No fumar.</li>
								<li>No tomar: café, té, refresco de cola y bebidas alcohólicas.</li>
								<li>Suspender si es que toma algunos de los siguientes medicamentos
								previa autorización de su médico, cuando se le realice prueba de esfuerzo 
								en banda sin fin.</li>
							</ul>

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