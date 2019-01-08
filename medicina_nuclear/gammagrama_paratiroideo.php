<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama paratiroideo) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama paratiroideo.</h2></div>
						
						<p align="justify">La gammagrafía paratiroidea es un estudio de medicina
						nuclear que valora la función de la glándula paratiroides por medio
						de la concentración de radiofármaco la cual nos indicará un aumento
						de la función en la glandula.</p>

						<p align="justify">Actualmente se emplean procedimientos de localización
					    preoperatoria de los adenomas por medio de la gammagrafía, la cual es un 
					    procedimiento de invasión mínima.</p>

					    <p align="justify">El estudio gammagráfico está justificado en aquellos pacientes
					    con incremento de la paratohormona, hipercalcemia e hipofosfatemia.</p>

					    <p align="justify">La causa más frecuente de hipercalcemia no asociada a cáncer es
					    el hiperparatiroidismo primario. El adenoma es responsable del 90% de los casos.</p>

					    <p align="justify">La Gammagrafía con sestamibi marcado con tecnecio 99m es un 
					    procedimiento muy sencillo y prácticamente sin efectos secundarios como el resto de
					    los procedimientos que se realizan en medicina nuclear.</p>


						<div class="title"><h2>Indicaciones:</h2></div>
						<ul class="check-list">
							<li>No necesita ninguna preparación previa</li>
							<li>El procedimiento inicia con la inyección del sestamibi en una vena periférica,
							continuando con la adquisición de imágenes en la gammacámara a los 20 minutos</li>
							<li>Se complementa con imágenes a las 2 horas con tomas laterales o tomográficas
							(SPECT) según se requieran para especificar la posición de los adenomas en caso 
							de estar presentes.</li>
							<li>El paciente pude regresar a sus actividades normales al concluir el estudio.</li>
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