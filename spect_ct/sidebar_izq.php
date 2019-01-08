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
						<div class="title"><h2>Aviso de privacidad</h2></div>
						<ul class="link-list">
							<li><a href="../medicina_nuclear/aviso_de_privacidad_numedics.pdf" target="_blank">Descargar aviso de privacidad</a></li>
						</ul>
						

						<div class="title"><h2>Más enlaces</h2></div>
						<div class="tagcloud">
							<a href="../medicina_nuclear/preguntas_frecuentes.php">Preguntas frecuentes</a>
							<a href="../medicina_nuclear/instalaciones.php">Instalaciones</a>
							<a href="../medicina_nuclear/contacto.php">Contacto</a>
							<a href="../medicina_nuclear/quienes_somos.php">Quienes somos</a>
							<a href="../medicina_nuclear/index.php">Medicina Nuclear</a>
							<a href="../servicios.php">Servicios</a>
							<a href="../doctores.php">Doctores</a>
						</div>
					</div>
			</div>
		';
?>
