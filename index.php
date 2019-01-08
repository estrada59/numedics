<!-- **********   Slider   ***************** -->
<?php include 'includes/slider_principal.php'; ?>

<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>NUMEDICS</title>

	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php include "includes/java_script.php";
		include_once "analyticstracking.php";
	 ?>
	<link rel="stylesheet" href="skins/red/red.css" id="colors" /> 

	<!-- ********** FIN  inicio script, link, y meta   ************** -->

</head>
<body>

<div id="wrapper">
	<header id="header" class="container-fluid main">
	  <div class="header-bg">
		<div class="container">
			<div class="decoration dec-left visible-desktop"></div>
			<div class="decoration dec-right visible-desktop"></div>	  
			<div class="row">
				
				<!-- ***********  encabezado de página  ************* -->	
			 		
			 		<?php include_once "includes/header_page.php"; ?>

			 	<!-- ***********  FIN encabezado de página  ************* -->	

			</div>
			<div class="row">

			    <!-- ***********        Menú principal      ************* -->	

					<?php include_once "includes/menu_principal.php";
							$menu = raiz();
					?>

				<!-- ***********        Menú principal      ************* -->

			</div>

			<div class="row">
				<div class="span12 main-slider">
					

					<!---  ********         Inicio SLIDER  ********    -->
					
					<div id="layerslider-container">	
						<div id="layerslider" style="width:100%; height:380px;">
					
							<?php
									$link= '<a href="medicina_nuclear/Tratamiento_para_la_artritis.pdf" target="_blank"><strong>Ver artículo</strong></a>';
									$titulo="Tratamiento para artritis";
									$descripcion = "La medicina nuclear en el tratamiento de la artritis.".$link;
									$subtitulo = " ";
									$ruta_img = "images/gallery/flayer_artritis.jpg";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);

									$link= '<a href="medicina_nuclear/La_medicina_nuclear_y_usted.pdf" target="_blank"><strong>Ver artículos</strong></a>';
									$titulo="MEDICINA NUCLEAR";
									$descripcion = "¿Qué es la medicina nuclear? descargue la información aquí.".$link;
									$subtitulo = " ";
									$ruta_img = "images/gallery/flayer_medicina_nuclear.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);


									$titulo="PROXIMAMENTE";
									$descripcion = "En medicina nuclear nuevo tratamiento.";
									$subtitulo = " ";
									$ruta_img = "images/gallery/xofigo.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);



									$link= '<a href="http://redsaludmexico.com/inicio.php?yplz=MQ==" target="_blank"><strong>Ver artículos</strong></a>';
									$titulo="NUMEDICS";
									$descripcion = "10% de descuento en Tomografía y Medicina Nuclear
													si menciona algún artículo de la revista en espera.
													 ".$link;
									$subtitulo = " ";
									$ruta_img = "images/gallery/descuento.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);


									$titulo="MEDICINA NUCLEAR";
									$descripcion = "Tomografía por Emisión Computada de Fotón Único más la información anatomica tomográfica, en una misma sesion.";
									$subtitulo = "SPECT-CT ";
									$ruta_img = "images/gallery/32.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);


									$titulo="TOMOGRAFIA";
									$descripcion = "La tomografía computada o TC es una técnica radiográfica que utiliza una computadora para crear imágenes de planos (o cortes) transversales del corazón.";
									$subtitulo = "SPECT-CT ";
									$ruta_img = "images/gallery/33.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);


									$titulo="RAYOS-X";
									$descripcion = "Conocer la anatomía interna del cuerpo con precisión es un elemento crítico en el diagnóstico de enfermedades.";
									$subtitulo = "";
									$ruta_img = "images/gallery/40.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);

									$titulo="ULTRASONIDO";
									$descripcion = "Obtenga un diagnóstico certero y profesional, con la calidez y eficacia que respalda a cada uno de nuestros  servicios. La ecografía o ultrasonido, es un método de diagnóstico que utiliza ondas sonora";
									$subtitulo = "";		
									$ruta_img = "images/gallery/41.png";
									slide($descripcion,$subtitulo,$titulo,$ruta_img);

							?>
						</div>
					</div>

					<!---  ********         Fin SLIDER     *********    -->

				</div>
			</div>
		</div>
	  </div>
	</header>
	<section id="content" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="span9">
				<h1><!--Aqui se puede poner un titulo--></h1>
				<span class="purchase"><!--Y aqui un contenido--></span>
			</div>
			<!--<div class="span3 aligncenter"><a href="#" class="button large s3">Purchase Now</a></div>-->
		</div>
		
		<div class="row">
			<div class="span12">
					<?php 
						include 'includes/slide_medicos.php';

						// LLenar en el siguiente orden NOMBRE, ESPECIALIDAD, URL DE LA SECCIÓN, URL IMÄGEN
						$medicos = array(
    						0  => array("Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"medicina_nuclear/JorgeCisneros.php",	"images/doctores/dr2.jpg" ),
    						1  => array("Adrian Estrada Campos",			"Médico Radiologo",		"tomografia/AdrianRadiologo.php",	"images/doctores/dr1.png" ),
   							2  => array("Dorian Narcía Guízar",				"Urólogo",				"urologia/DorianNarcia.php",	"images/doctores/dr4.jpg" ),
   							3  => array("Alejandra Rojas Ramos",			"Pediatra Neonatóloga",	"pediatria/AlejandraRojas.php",	"images/doctores/dr5.jpg" ),
   							4  => array("Dra. Elsy Fabiola Saldaña Lievano","Cirujano Oftalmólogo",	"oftalmologia/index.php",		"images/doctores/dr6.jpg" ),

   						
						    "num_elementos"  => 4,
						    "titulo_slide"   => "Médicos",
						    //Sólo si es necesario botón
						   "nombre_boton" => "Todos nuestros médicos",
						    "url_boton"    => "doctores.php"


    					);

						$t = slide_med_pag($medicos);
					?>
			</div>
		</div>
		<div class="row">
			<div class="span4">
				<div class="title"><h2>Haga una cita</h2></div>
				<p><i>Usted puede hacer una cita por teléfono NUMEDICS se encuentra abierto de 08:00 - 20:00 </i></p>
				<p>
				<span class="phone contact">01 (961) 602 9211</span>
				<a href="mailto:estrada@numedics.com.mx" class="email contact">informes@numedics.com.mx</a>
				</p>
				<a href="contacto.php" class="button small s3">Contacto</a>
		</div>
			<div class="span4">
				<div class="title"><h2>Nuestros Servicios Médicos</h2></div>
				<ul class="service-list">
					
					<li><a href="medicina_nuclear/index.php">Medicina Nuclear</a> </li>
					<li><a href="medicina_nuclear/tratamiento_para_artritis.php">Tratamiento para artritis</a> </li>
					<li><a href="spect_ct/index.php">SPECT-CT</a></li>
					<li><a href="prueba_esfuerzo/index.php">Prueba de Esfuerzo</a></li>
					<li><a href="tomografia/index.php">Tomografía</a> </li>
					<li><a href="tomografia/AdrianRadiologo.php">Ultrasonido 4D</a></li>
					<li><a href="pediatria/AlejandraRojas.php">Pediatría</a></li>
                  	<li>Urología</li>
                  	<li>Litotripsia</li>
                  	<li>Oftalmología</li>
					<li>Ecocardiografía</li>
				</ul>
				
                <div class="span4">
						<a href="servicios.php" class="button small s3">Todos los servicios </a>
				</div>
			</div>
            
            <div class="span4">
				<div class="title"><h2>Preguntas Frecuentes:</h2></div>
				<ul class="post-list">
					<li>
						<!--<a href="#" class="headline">¿Que es la medicina nuclear?</a>-->
						<div class="headline"><h4>¿Que es la medicina nuclear?</h4></div>
						<p align="justify">La Medicina Nuclear es un método auxiliar de diagnóstico, el cual se basa en el uso de isótopos radiactivos de vida media corta, los cuales son monitoreados dentro de cualquier sistema orgánico, mediante el uso de detectores de centelleo acoplados a un sistema moderno de computo, denominado Cámara de Anger o Gammacámara.</p>
					</li>
					<li>
						<!--<a href="#" class="headline">¿Qué es la gammagrafía, gammagrama, centellograma o centellografía?</a>-->
                    	<div class="headline"><h4>¿Qué es la gammagrafía, gammagrama, centellograma o centellografía?</h4></div>
						<p align="justify">Es una prueba durante la cual se utiliza una pequeña cantidad de radiactividad para obtener imágenes. Estas imágenes gamagráficas serán de gran utilidad para su médico, para ver el funcionamiento de un órgano, comprender mejor su enfermedad, completar su diagnóstico y así poder aplicarle el tratamiento más adecuado.</p>
					</li>
				</ul>				
				
				<div class="span4">
						<a href="medicina_nuclear/preguntas_frecuentes.php" class="button small s3">Todas las preguntas </a>
				</div>
                <!--http://medex-html.russian-themes.com/Pages_Ask_a_Question.html-->
			</div>
			<!--<div class="span4">
				<div class="title"><h2>What our Client's Say:</h2></div>
				<div class="carousel slide review-slider" id="MeetOurDoctor4">
				<div class="blockquote-line"><div class="blockquote-pattern"></div></div>
					<div class="carousel-inner review-inner">
						<div class="active item">
							<div class="blockquote">In convallis venenatis magna, nec interdum ipsum iaculis et. Nulla facilisi. Duis in neque malesuada lectus pellentesque bibendum ac et dui. Curabitur venenatis lacinia pellentesque. Donec dapibus euismod ligula.</div>
							<div class="md">
								<img alt="" src="images/gallery/11.jpg"/>
								<div class="md-name">
									<strong>Rafael Blasini</strong>, MD
									<div class="company-name">Internal Medicine</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="blockquote">In convallis venenatis magna, nec interdum ipsum iaculis et. Nulla facilisi. Duis in neque malesuada lectus pellentesque bibendum ac et dui. Curabitur venenatis lacinia pellentesque. Donec dapibus euismod ligula. Maecenas erat diam, tincidunt ut facilisis vitae, vestibulum ut neque. In convallis venenatis magna, nec interdum ipsum iaculis et. Nulla facilisi. Duis in neque malesuada lectus pellentesque bibendum ac et dui. Curabitur venenatis lacinia pellentesque. Donec dapibus euismod ligula. Maecenas erat diam, tincidunt ut facilisis vitae, vestibulum ut neque.</div>
							<div class="md">
								<img alt="" src="images/gallery/12.jpg"/>
								<div class="md-name">
									<strong>Rafael Blasini</strong>, MD
									<div class="company-name">Internal Medicine</div>
								</div>
							</div>
						</div>
					</div>
					<a class="prew-slide nav-slider" href="#MeetOurDoctor4" data-slide="prev">&lsaquo;</a>
					<a class="next-slide nav-slider" href="#MeetOurDoctor4" data-slide="next">&rsaquo;</a>
				</div>							
			</div>	
		</div>
	</div>
	</section>
</div>-->


<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->


</body>
</html>