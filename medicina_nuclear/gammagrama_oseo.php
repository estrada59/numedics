<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama óseo) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama óseo</h2></div>
						
						<p align="justify">La gammagrafía ósea es una prueba de Medicina Nuclear
						que se diferencia de otras exploraciones de diagnóstico por imagen, la
						cual no representa únicamente unas estructuras anatómicas, sino que a la
						vez  funcionales aumento o disminución  metabólica e intercambio iónico.
						Por este motivo permiten el diagnóstico precoz y con una elevada sensibilidad 
						de múltiples procesos llegando a detectar anormalidades que con otros métodos 
						de diagnostico aun no son visibles.</p>

						<div class="row">
							<div class="spam8">
								<img width="650" src="imagenes/gammagrama_oseo.jpg"/>		
							</div>
						</div>

						<div class="title"><h2>Indicaciones:</h2></div>

						<ul align="justify" class="check-list">
							<li>No es necesario ayuno.</li>
							<li>No traer objetos metálicos (joyas, llaves etc.)</li>
							<li>Tomar líquidos después de la aplicación del radiofármaco.</li>
							<li>No es necesario suspender medicamentos.</li>
							<li>Procurar no manchar tanto su ropa externa como interior y manos
							 de orina después de la aplicación del radiofármaco, teniendo en 
							 cuenta de que si esto llegase a ocurrir darle aviso al médico o tecnólogo.</li>
							<li>Si usted está amamantando a su bebé o si cree estar embarazada, debe de
							 informarle a su médico antes del examen.</li>
							<li>Se administra el radiofármaco por vía intravenosa el cuál se concentra en el tejido óseo.</li>
							<li>En caso de pacientes con diagnóstico de traumatismo, tumor óseo primario, osteomielitis, se
							realiza un estudio dinámico de la región sospechosa durante 90 segundos y se toma una imagen
							estática a los 5 minutos.</li>
							<li>Para que el fármaco se concentre en forma adecuada en tejido óseo se necesitan aproximadamente
							de 2 a 4 horas posterior a su administración.</li>
							<li>Por lo tanto se le puede administrar el fármaco y regresar en 2 o 5 horas para la toma de 
							imágenes de cuerpo completo.</li>
							<li>La duración de la toma de imágenes es de 1 hora aproximadamente.</li>
						</ul>
						
						<div class="title"><h2>El gammagrama óseo se indica para:</h2></div>

						<div class="row">
							<div class="span4">
								<blockquote>
									<p>Diagnóstico de cáncer óseo (con MIBI, tetrofosmin o Tl-201).</p>
								</blockquote>
							</div>
							<div class="span4">
								<blockquote>
									<p>Diagnóstico diferencial entre celulitis y osteomielitis.</p>
								</blockquote>
							</div>
						</div>

						<div class="row">
							<div class="span4">
								<blockquote>
									<p>Diagnóstico de osteomielitis con UBI (pie diabético) diagnóstica 
										antes de que se vea por métodos radiológicos.</p>
								</blockquote>
							</div>
							<div class="span4">
								<blockquote>
									<p>Enfermedades metabólicas como enfermedad de Paget</p>
								</blockquote>
							</div>
						</div>
						
						<div class="row">
							<div class="span4">
								<blockquote>
									<p>Valoración de tumor óseo primario y extensión tumoral</p>
								</blockquote>
							</div>
							<div class="span4">
								<blockquote>
									<p>Valoración de metástasis óseas por cáncer de mama, próstata, 
									cáncer de pulmón, cáncer de riñón etc.</p>
								</blockquote>
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