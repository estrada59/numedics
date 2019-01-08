<?php				


function carusel($lista){
echo'		<div class="thumbnail">
				<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							
							<div class="item active">
	';
$cont = count($lista);

for($i=0; $i<$cont;$i++){
    if( $i >= 1 ){
    	echo '<div class="item">'; 
    }
	$temp	 	= 	array();
	$temp		= 	$lista[$i];
	$url_img 	= 	$temp[0];
	$texto		=	$temp[1];
	echo'		
						<img alt="" src="'.$url_img.'" >';
							
							if(strlen($texto)>2){
								echo '
									   <div class="carousel-caption visible-desktop">
										<p>'.$texto.'</p>
										</div>
								     ';
							}
	echo'						
					</div> 
		';	
}	
	echo'						
						</div>
					<a class="left carousel-control hidden-phone" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="right carousel-control hidden-phone" href="#myCarousel" data-slide="next">&rsaquo;</a>						
				</div>
				</div>
				
		';

	return 1;
}
?>
