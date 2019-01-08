<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear (Gammagrama gástrico) - NUMEDICS</title>
	
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
					<div class="title"><h2>Gammagrama gástrico.</h2></div>
						
						<p align="justify">El sangrado gastrointestinal es una de las causas quirúrgicas
						relativamente frecuentes en la edad pediátrica, puede estar acompañado de hematoquequecia,
						melena, fiebre, dolor abdominal y vómito, además, de haber sido descartados cuadros
						infecciosos.</p>

						<p align="justify">La radiografía simple de abdomen puede evidenciar edema de las
						asas intestinales, con niveles hidroaéreos, la ecografía puede describir una imagen
						hipoecogénica con centro ecogénico y anillo concéntrico no móvil, sin líquido
						libre en cavidad, sugestivo de invaginación intestinal.</p>
						
						<p align="justify">El divertículo de Meckel es la malformación congénita más común del
						tracto gastrointestinal, presentándose en un 2 a 4 % de la población general. Es un
						divertículo verdadero ya que contiene todas las capas de la pared intestinal. su origen
						resulta embriológicamente de obliteración incompleta del conducto onfalomesentérico o 
						vitelino, esta estructura aparece entre la quinta y sexta semana de gestación. </p>

						<p align="justify">El divertículo de Meckel representa el 90% de todas las malformaciones
						del saco vitelino (fístula onfalomesentérica, enteroquiste, bandas fibrosas y el divertículo
						de meckel).</p>
						
						<p align="justify">Habitualmente se localiza en el intestino delgado, dentro de los 100 y 180
						cm próximos a la válvula ileocecal.</p>
						
						<p align="justify">Hasta un 60% de los divertículos de Meckel contienen tejido ectópico, el cual
						el 60% de ellos corresponde a mucosa gástrica, el resto se distribuye entre los que contienen 
						acinos e islotes pancreáticos, glándulas de Brunner, mucosa colónica, endometriosis o tejido 
						hepatobiliar. </p>

						<p align="justify">La mayoría de los pacientes son asintomáticos, lo común es que se diagnóstica
						como hallazgo en los estudios radiológicos, durante procedimientos quirúrgicos o necropsia.</p>
						
						<p align="justify">Los pacientes más sintomáticos son los menores de 10 años con prevalencia del 
						sexo masculino, en la edad pediátrica el síntoma predominante es el sangrado gastrointestinal, el
						90% de contienen mucosa heterotópica que es ulcerada, el sangrado es poco doloroso, puede ser 
						masivo con aspecto rojo brillante en las heces.</p>

						<p align="justify">La gammagrafía con tecnecio 99m (TC-99m) puede evidenciar la presencia del
						divertículo de Meckel cuando el tejido heterotópico es del tipo gástrico con secreción ácida, 
						la sensibilidad es de 60-75%, especificidad 100%, VPP 77% y VPN 100%.</p>

						<p align="justify">El uso de inhibidores de la bomba de protones (omeprazol por ejemplo) 
						durante el procedimiento aumenta la sensibilidad de la gammagrafía.</p>
						
						<p align="justify">La gammagrafía con tecnecio 99m es un procedimiento muy sencillo y sin 
						efectos secundarios que requiere que el paciente se presente en ayuno de 6-8 horas previas,
						preferentemente estar medicado con omeprazol 3 días antes. </p>

						<p align="justify">Para realizar el procedimiento se coloca al paciente en la gammacámara y 
						se le administra el radiotrazador en una vena periférica y se adquieren imágenes durante 15 
						- 20 minutos, el paciente puede regresar a sus actividades normales inmediatamente, no requiere
						 ningún cuidado especial posteriormente.</p>


						
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