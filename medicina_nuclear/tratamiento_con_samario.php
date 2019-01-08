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
							/*include "../includes/slide_carusel.php";
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
							*/
					?>

					<div class="title"><h2>Tratamiento de Samario 153</h2></div>

						<p align="justify">Las estadísticas muestran que entre el 60 y 80% de los pacientes
						con tumoraciones malignas desarrollan metástasis óseas. El dolor producido por la 
						diseminación llega a ser inevitable e insoportable cuando alcanza la médula ósea,
						cuando sobrepasa los 50 mmHg de presión o al existir asociadamente la invasión del
						periostio.</p>

						<p align="justify">El dolor percibido es intenso, persistente, progresivo y habitualmente
						conlleva un deterioro significativo de la calidad de vida del paciente ya que se
						extiende a más regiones del cuerpo con el tiempo.</p>

						<p align="justify">Para contener esta sintomatología se han usado diferentes procedimientos
						terapéuticos desde los analgésicos, la cirugía y los radiofármacos. Estos últimos se han 
						empleado desde hace 60 años, especialmente el samario 153 etilen diamino tetraetilen fosfato
						(Sm153-EDTMP), el cual ofrece un beneficio importante en un 80% de los casos tratados, sin 
						embargo, en el 20% restante, no hay una respuesta adecuada al tratamiento y el dolor persiste.</p>

						<p align="justify">Los estudios realizados reflejan que aproximadamente un 28.5% de los 
						pacientes tendrá una remisión completa del dolor, 37.2% remisión parcial y el 14.3% no
						experimentará mejorías perceptibles. La respuesta al tratamiento ocurre entre los 10 y
						30 días después de la administración de la terapia en el 83 % de los pacientes.
						El 71.4% de los pacientes pueden reducir el consumo de analgésicos.</p>

					<div class="title"><h2>INDICACIONES</h2></div>
						<p align="justify">Se administra una dosis terapéutica de samario 153 por vía intravenosa, a 
						petición de médico tratante, para tratamiento de paliación del dolor por metástasis óseas. </p>

						<p align="justify">1. El material radiactivo se elimina en unos días, por la orina y por
						su seguridad y la de las personas que conviven con usted se le sugiere haga lo siguiente
						por lo menos DURANTE LOS SIGUIENTES 3 DIAS: </p>

						<p align="justify">- Manténgase a distancias mayores a un metro y durante el menor tiempo posible
						cerca de bebés, niños y mujeres embarazadas.</p>

						<p align="justify">- De ser posible durante 3 (tres) días duerma solo (a) en una cama, aunque en
						la recámara duerman otras personas.</p>

						<p align="justify">- De ser posible, lavar su ropa interior por separado de los del resto de la familia.</p>

						<p align="justify">- Después de ir al baño, jale el agua del escusado por lo menos 3 veces.</p>						

						<p align="justify">- Tome sus medicinas como le indique su médico y asista a su cita, ya que el medicamento inicia su acción de una a dos semanas aproximadamente después de su administración.</p>						

						<p align="justify">- Tome suficientes líquidos durante el período indicado.</p>

						<p align="justify">- Evite frecuentar lugares y transportes públicos. </p>
						<p align="justify">2. Se deben tomar; biometría hemática con recuento de plaquetas, fosfatasa alcalina y DHL, cada 15 días con valoración clínica de la respuesta al tratamiento cada 8 días.</p>
						<p align="justify">Paciente con múltiples lesiones infiltrativas, candidato a Terapia con Samario 153</p>
						
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