<?php


function slide_med_pag($medicos){
								
echo '
			
			
			<div class="span12">
				<div class="title"><h2>Servicios:</h2></div>
					<div class="row">
						
				
                    															
	';

//*********   Calculos previos (¡importantes!) **************
$num_elementos  = $medicos["num_elementos"];   							//número de elementos para mostrar 
$tam_array      = count($medicos)-1;   							//cantidad de elementos en array
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
			$area_medica	= 	$temp[4];				
			++$j;
    		
    		echo'
							<div class="span4">
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
									<h2>'.$area_medica.'</h2>
									<a href="'.$pagina.'" class="button small s3">leer más</a>
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
				$area_medica	= 	$temp[4];
		
				echo'
								<div class="span4">
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
									<h2>'.$area_medica.'</h2>
									<a href="'.$pagina.'" class="button small s3">leer más</a>
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
					</div> <!-- item row -->
			</div>
		';
}


echo'				</div>
							
				</div>
			<a href="doctores.php" class="button small s3 floatright">Todos nuestros médicos</a>
    ';
}
?>