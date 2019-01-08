<!DOCTYPE HTML>
<html lang="es-MX">
<head>
	<title>Medicina Nuclear Dr. Jorge Cisneros Médico Nuclear- NUMEDICS</title>
	
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
								<img alt="" src="../images/doctores/full/dr2.jpg"/>
								<div class="link-img-bg">
									<div class="group">
										<h4>Dr. Jorge L. Cisneros Encalada</h4>
										<p>Medicina Nuclear</p>	
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="span6">	
					<div class="hgroup">
						<hgroup>
							<h2>Dr. Jorge L. Cisneros Encalada</h2>
							<h4>MEDICINA NUCLEAR</h4>
                        	<P><strong>NUMEDICS PLANTA BAJA</strong></P>
						</hgroup>
						<ul class="social-icons">
							<li class="facebook"><a href="#">Facebook</a></li>
							<li class="twitter"><a href="#">Twitter</a></li>
							<!--<li class="skype"><a href="#">Skype</a></li>-->
						</ul>
					</div>
					<p><strong>UNIVERSIDAD AUTÓNOMA DE GUADALAJARA</strong><br/>
					Ced. Profesional.1576031     Aut. de Esp. AECEM-24430</p>
	                
					<p><strong>POST-GRADUADO EN MEDICINA NUCLEAR EN EL H.E. C.M.N. S. XX1 I.M.S.S.</strong></p>
					<!--<p><strong>HORARIOS DE ATENCIÓN</strong><br>Lunes a Viernes.<br>9:00 a 14:00 hrs. y de 16:30 a 19:30<br>Sábados<br>9:00 a 13:00 hrs.</p>-->
					<!--<p><strong>Special Interests</strong><br/>
					Women’s and Children’s Health</p>-->
				</div>
			</div>
    		<!--<div class="title"><h2>Bienvenido a NUMEDICS</h2></div>-->

    		
    	</div>
    	
	</section>
	
<!-- ****************************         footer         ****************************  -->
	
	<?php include_once "../includes/footer.php"; ?>

<!-- ****************************      fin  footer       ****************************  -->
</body>
</html>