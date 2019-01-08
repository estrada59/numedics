<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Contacto - NUMEDICS</title>
	
	<!-- **********   inicio script, link, y meta   ***************** -->

	<?php include "includes/java_script.php"; 
	include_once "analyticstracking.php";
	?>
	<link rel="stylesheet" href="skins/red/red.css" id="colors" /> 

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
			
		</div>
	  </div>
	</header>
	<section id="content" class="container-fluid">
	<div class="container">
		<div id="headline-page">
			<h1>Contacto</h1>
			<!--<div id="crumbs"><a href="index.html">Inicio</a> / <a href="Pages_Contact.html" class="active">Contacto</a></div> -->
		</div>
		<div class="row">
			<div class="span12">
				<div class="thumbnail">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.409121901948!2d-93.12926399999999!3d16.756308999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8faf3cb9c2b%3A0xd4c1a4ce6941baca!2sNUMEDICS!5e0!3m2!1ses-419!2smx!4v1422961568711" width="800" height="250" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>
		<?php /*<div class="row">
			<div class="span8">
				<div class="title"><h2>¿Desea solicitar una cita para alguna especialidad?. Llene el siguiente formulario</h2></div>
				<!--<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong>. Curabitur bibendum molestie eros a ornare. Phasellus consequat ultricies ante. Donec pharetra, elit at euismod posuere, nunc tortor viverra urna, a malesuada dui sem vitae lectus.</p>-->
				<form id="ajax-contact-form" action="includes/contact-form.php">
				<div class="row">
					<div class="span4">
						<div class="form-padding">
							<label for="f1">Su nombre(requerido):</label>
							<input type="text" name="name" id="f1" class="form-text" value=""/>
							<label for="f2">Especialidad:</label>
							<input type="text" name="category" id="f2" class="form-text" value="" size="40"/>
						</div>
					</div>
					<div class="span4">
						<div class="form-padding">
							<label for="f3">Su correo(requerido):</label>
							<input type="text" name="email" id="f3" class="form-text" value="" size="40"/>
							<!--<label for="f4">Subject:</label>
							<input type="text" name="subject" id="f4" class="form-text" value="" size="40"/>	-->	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span8">
						<div class="form-padding">
							<label for="f5">Mensaje(requerido):</label>
							<textarea name="message" id="f5" cols="40" rows="10"></textarea>	
							<input type="submit" class="button s1 small" value="Enviar"/>
						</div>
					</div>
				</div>				
				</form>
				<div id="form-message"></div>
			</div>
			<div class="span4">
				<div class="headline"><h4>Contacto</h4></div>
				<div class="card">
					<span class="contact-line c1">Tuxtla Gutiérrez, Chiapas C.P. 29030</span>
					<span class="contact-line c2">Teléfono: 01 (961) 602 9211</span>
					<span class="contact-line c3"><a href="mailto:informes@numedics.com">informes@numedics.com.mx</a></span>
				</div>
			</div>
		</div> */
		?>
	</section>
	
</div>

<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>