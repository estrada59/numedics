<?php


function slide_med_pag($medicos){

$titulo = $medicos["titulo_slide"];
	

echo '
			<div class="title"><h2>'.$titulo.'</h2></div>
				<div id="MeetOurDoctor1" class="carousel slide hidden-phone">
					<div class="carousel-inner">

				
                    <!-- se ejecuta una sola vez -->

						<div class="item active">															
	';

//*********   Calculos previos (¡importantes!) **************
$num_elementos  = $medicos["num_elementos"];   							//número de elementos para mostrar 
$tam_array      = count($medicos)-4;   							//cantidad de elementos en array
$num_filas		= $tam_array / $num_elementos ;	//número de filas


$num_filas		= floor($num_filas);

$modulo			= $tam_array % $num_elementos;




slide_med($medicos,$num_elementos,$num_filas,$modulo);
return 1;
}



function slide_med($medicos, $num_elementos, $num_filas, $modulo){

/**************** INICIO  Declaración de variables *****************/

$i=0;
$j=0;
$cont=0;
$flag =0;		//controla la entrada al modulo división
$flag2=1;		//controla la entrada al cociente de la división
$temp = array();

/****************  FIN   Declaración de variables *****************/

/**************** INICIO Rutina de funcionamiento *****************/

for( $i=0; $i<=$num_filas; $i++ ){   		
 
	$cont += $num_elementos;
	
	//controla el acceso hacia el cociente y el residuo
	if( $i == $num_filas ){
		if( $modulo == 0 ){
				$flag2=0;
		}
		else{	$flag = 1;	}	
	}
    
    if($flag){											//  ***** Controla los ultimos que faltan acomodar. *****
	
		if($i >= 1){
				echo '</div>';
				echo '<div class="item row">';
		}
	
		echo '      		<div class="row">';


    	for( $k=0; $k<$modulo; $k++ ){					//  ***** Cuenta los últimos elementos (Módulo "residuo división") *****
			
			$temp = array();
			$temp = $medicos[$j];

			$medico 		=	$temp[0];
			$especialidad	=	$temp[1];
			$pagina			=	$temp[2];
			$ruta_imagen	=	$temp[3];				
			++$j;
    		
    		echo'
							<div class="span3">
									<a href="'.$pagina.'" class="link-img">
										<div class="img-border">
											<div class="img-block">
												<img alt="" src="'.$ruta_imagen.'"/>
												<div class="link-img-bg">
													<div class="group">
														<h4>'.$medico.'</h4>
														<p>'.$especialidad.'</p>

													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
			';
    	}
    }
    else{												 //	 ***** Acomoda el resultado de acuerdo al cociente de la división *****

    	if($flag2){
			if($i >= 1){
					echo '</div>';
					echo '<div class="item row">';
			}
			echo '				<div class="row">';

			for ($j=$j; $j <$cont ; $j++) { 		

				$temp =isset( $medicos[$j]) ? $medicos[$j] : null;

				$medico 		=	$temp[0];
				$especialidad	=	$temp[1];
				$pagina			=	$temp[2];
				$ruta_imagen	=	$temp[3];
		
				echo'
								<div class="span3">
									<a href="'.$pagina.'" class="link-img">
										<div class="img-border">
											<div class="img-block">
												<img alt="" src="'.$ruta_imagen.'"/>
												<div class="link-img-bg">
													<div class="group">
														<h4>'.$medico.'</h4>
														<p>'.$especialidad.'</p>

													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
   		 		';
			}
	    }
	}
	
	echo '</div>';
}
/****************  FIN   Rutina de funcionamiento *****************/

if($flag2){
	echo'															
					</div> <!-- item row cuando hay módulo-->
			</div>
		';
}else{

	echo '</div> <!-- item row cuando no hay módulo-->';
}

/*echo'				
					<a class="prew-slide nav-slider" href="#MeetOurDoctor1" data-slide="prev">&lsaquo;</a>
					<a class="next-slide nav-slider" href="#MeetOurDoctor1" data-slide="next">&rsaquo;</a>		
				</div>

				<a href="#" class="button small s3 floatright">asd</a>

				';

*/
if($medicos["nombre_boton"] != ' '){

	echo'			
					<a class="prew-slide nav-slider" href="#MeetOurDoctor1" data-slide="prev">&lsaquo;</a>
					<a class="next-slide nav-slider" href="#MeetOurDoctor1" data-slide="next">&rsaquo;</a>		
				</div>';
    
    $nombre_boton 	= $medicos["nombre_boton"];
    $url			= $medicos["url_boton"];

    echo'				
			<a href="'.$url.'" class="button small s3 floatright">'.$nombre_boton.'</a>
    ';
}
else{
	echo'				
					<a class="prew-slide nav-slider" href="#MeetOurDoctor1" data-slide="prev">&lsaquo;</a>
					<a class="next-slide nav-slider" href="#MeetOurDoctor1" data-slide="next">&rsaquo;</a>		
				</div>
    ';
 }


}
?>