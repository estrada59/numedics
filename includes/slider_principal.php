

<?php
 


function slide($descripcion, $subtitulo, $titulo,$ruta_img) {


echo 
	'
	
	<div class="ls-layer" style="slidedelay:4000">
	
	<span class="ls-bg bg1" style="right:0px;slidedisrection : fade; durationin : 1000; durationout : 1000; easingin : easeOutExpo; delayin :0;"></span>
	
	<div class="ls-s1 hidden-phone" style="top:0px; left:0px; slidedirection : right; slideoutdirection : right; durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 1000;"><img alt="" src="'.$ruta_img.'"/>
	</div>
		
	<img alt="" src="'.$ruta_img.'" class="ls-s6 visible-phone" style="top:0px; left:80%; slidedirection : right; slideoutdirection : right; durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 1000;"/>
	';
echo '	<span class="ls-s2" style="top:80px; left:35px; slidedirection : left; slideoutdirection : left; durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 1000;"/></span>
								
    <!--************* Agregar enlace  *************-->

	<!--<a href="#" class="ls-s3" style="top:230px; left:190px; slidedirection : bottom; slideoutdirection : bottom; durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 2500;">READ DETAILS</a>-->
	
	<div class="ls-s4 hidden-phone" style="top:160px; left:150px; slidedirection :right; slideoutdirection : right; durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 2500;">
	';

	echo  '	<h3>'.$subtitulo.'</h3>';
    echo '<p align="justify">'.$descripcion.'</p>';
			
	echo'</div>
	
	<div class="ls-s5" style="top:100px; left:120px; slidedirection :top; slideoutdirection :top; durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 2500;">
	';

    echo $titulo;
    echo '
	</div>
</div>
	';
 $titulo="";
 $subtitulo="";
 $descripcion="";
 $ruta_img="";
}

?>