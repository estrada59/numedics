<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Tomografía, Ultrasonido y Rayos X Dr. Adrian Estrada Médico radiologo - NUMEDICS</title>
	
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
    		
    		<div class="row post">
			<div class="span6">
				<a href="#" class="link-img">
					<div class="img-border">
						<div class="img-block">
							<img alt="" src="../images/doctores/full/dr1.jpg"/>
							<div class="link-img-bg">
								<div class="group">
									<h4>Dr. Adrián Estrada Campos</h4>
									<p>MEDICO ESPECIALISTA EN RADIOLOGIA E IMAGEN</p>	
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="span6">	
				<div class="hgroup">
					<hgroup>
						<h2>Adrián Estrada Campos</h2>
						<h4>MEDICO ESPECIALISTA EN RADIOLOGIA E IMAGEN</h4>
                        <P><strong>NUMEDICS CONSULTORIO 1</strong></P>
					</hgroup>
					<ul class="social-icons">
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="skype"><a href="#">Skype</a></li>
					</ul>
				</div>
				<p><strong>CERTIFICADO POR EL CONSEJO MEXICANO DE RADIOLOGIA E IMAGEN</strong><br/>
				<a href="http://www.cmri.org.mx/" target="_blank">www.cmri.org.mx</a></p>
                
				<!--<p><strong>NUMEDICS CONSULTORIO 1</strong></p>-->
				<p><strong>HORARIOS DE ATENCIÓN</strong><br>Lunes a Viernes.<br>7:00 a 9:00 hrs.<br>13:30 a 15:00 hrs.<br>16:00 a 20:00 hrs.</p>
				<!--<p><strong>Special Interests</strong><br/>
				Women’s and Children’s Health</p>-->
			</div>
		</div>
    	</div>
	</section>
	
<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "../includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>