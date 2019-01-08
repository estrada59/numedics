<?php			
	echo'
			<div class="span3">


				
'; ?>

<?php 
	include '../includes/slide_medicos.php';

						// LLenar en el siguiente orden NOMBRE, ESPECIALIDAD, URL DE LA SECCIÓN, URL IMÄGEN
						$medicos = array(
    						0  => array("Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"#",	"imagenes/fusion_rinones_axial.png" ),
    						1  => array("Jorge Luis Cisneros Encalada",		"Médico Nuclear",		"#",	"imagenes/fusion_rinones_coronal.png" ),
    						2  => array("Jorge Luis Cisneros Encalada",		"Médico Nuclear",				"#",	"imagenes/fusion_rinones_sagital.png" ),
   							3  => array("Jorge Luis Cisneros Encalada",		"Médico Nuclear",				"#",	"imagenes/fusion_oseo.png" ),
   							4  => array("Jorge Luis Cisneros Encalada",		"Médico Nuclear",	"#",	"imagenes/fusion_octreotido.png" ),

						    "num_elementos"  => 1,
						    "titulo_slide"   => "SPECT-CT",
						    //Sólo si es necesario botón
						   	"nombre_boton" => " ",
						    "url_boton"    => " "


    					);

						$t = slide_med_pag($medicos);
?>

<?php


echo'
						<div class="title"><h2>Estudios.</h2></div>
							<ul class="link-list"> 
								<li><a href="#">Angiotomografía cerebral</a></li>
								<li><a href="#">Flebotomografía</a></li>
								<li><a href="#">Endoscopía y broncoscopía virtual</a></li>
							</ul>
						

						<div class="title"><h2>Más enlaces</h2></div>
						<div class="tagcloud">
							<a href="preguntas_frecuentes.php">Preguntas frecuentes</a>
							<a href="instalaciones.php">Instalaciones</a>
							<a href="contacto.php">Contacto</a>
							<a href="quienes_somos.php">Quienes somos</a>
							<a href="index.php">Tomografía</a>
							<a href="../servicios.php">Servicios</a>
							<a href="../doctores.php">Doctores</a>
						</div>
					</div>
			</div>
		';
?>
